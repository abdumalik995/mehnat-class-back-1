<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'username' => "required|string|unique:users,username,".request()->id,
            'fullname' => 'required',
            'age' => 'numeric|max:70',
            'status' => 'nullable|numeric|max:70'
        ];
    }
}
