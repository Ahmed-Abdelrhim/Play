<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $password;
    public $avatar;
    public $user;

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:authors,email,' . auth()->guard('author')->user()->id,
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:30000',
        ];
    }

    public function mount()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
    }

    public function render()
    {
        return view('livewire.update-profile');
    }

    public function submit()
    {
        $this->validate();
        $author = auth()->guard('author')->user();
        $image_name = auth()->guard('author')->user()->avatar;
        $password = auth()->guard('author')->user()->password;
        if ($this->avatar != '') {
            $image_name = Str::random(4) . time() . '.' . $this->avatar->guessExtension();
            $path = $this->avatar->storeAs('profiles', $image_name, 'public');
            $user = auth()->guard('author')->user();
        }

        if ($this->password != '') {
            $password = bcrypt($this->password);
        }

        try {
            DB::beginTransaction();
            $author->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $password,
                'phone' => $this->phone,
                'avatar' => $image_name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Something Went Wrong');
            return redirect()->back();
        }
        DB::commit();
        //        $this->name = '';
        //        $this->email = '';
        //        $this->phone = '';
        //        $this->password = '';
        //        $this->avatar = '';
        session()->flash('success', 'Profile Updated Successfully');
        return redirect()->back();
    }
}
