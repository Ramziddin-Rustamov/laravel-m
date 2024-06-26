<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'body' => 'required|string|max:255|min:10',
            'post_id' => 'required|exists:posts,id',
        ];
    }
}