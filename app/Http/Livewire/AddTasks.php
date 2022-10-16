<?php

namespace App\Http\Livewire;

use App\Models\BlogPost;
use Livewire\Component;

class AddTasks extends Component
{
    public $blogPostTitle;
    public $blogPostContent;


//    public $name;
//    public $email;
//    protected function rules(): array
//    {
//        return [
//            'name' => 'required|min:6',
//            'email' => ['required', 'email', 'not_in:' . auth()->user()->email],
//        ];
//    }

    public function render()
    {

        return view('livewire.add-tasks');
    }

    public function addBlogPost()
    {
        $user_id = auth()->user()->id;
        BlogPost::create([
            'title' => $this->blogPostTitle,
            'content' => $this->blogPostContent,
            'author_id' => $user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->blogPostTitle = '';
        $this->blogPostContent = '';
        $this->emit('taskAdded');
        // dd($this->blogPostTitle);
    }
}
