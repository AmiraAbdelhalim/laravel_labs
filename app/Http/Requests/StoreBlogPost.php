<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            //
            'title' => 'required|unique:posts|min:3',
            'description' => 'required | min:10',
            'user_id'=>'exists:users,id'
        ];
    }

    public function messages()
    {
        return [
                'title.min' => 'too short title buddy',
                'title.unique' => 'title already exists, try another one ;)',
                'title.required' => 'nothing is identified without a name so please fill the title',
                'description.required' => 'make your idea clear and add a description',
                'description.min' => 'too short buddy make your idea clear and increase your length of the description'

            ];
    }
}
