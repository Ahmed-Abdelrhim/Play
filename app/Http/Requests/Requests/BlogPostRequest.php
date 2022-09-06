<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | string | min : 4',
            'content' => 'required | string | min: 8 ',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title Is Required',
            'title.string' => 'Title Should be String',
            'title.min' => 'Title cant be less than 4 chars',
            'content.required' => 'Content Is Required',
            'content.string' => 'Content Should be String',
            'content.min' => 'Content be less than 8 chars',
        ];
    }
}
