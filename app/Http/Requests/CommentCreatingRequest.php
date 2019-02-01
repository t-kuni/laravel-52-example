<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CommentCreatingRequest extends Request
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
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:10',
            'name' => 'required|string|max:10',
            'body' => 'required|string|max:10',
        ];
    }
}
