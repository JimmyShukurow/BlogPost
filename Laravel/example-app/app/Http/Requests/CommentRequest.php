<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
 
    public function rules()
    {
        return [
            'author' => 'required| max:150',
            'content' => 'required| max:500'
        ];
    }
}
