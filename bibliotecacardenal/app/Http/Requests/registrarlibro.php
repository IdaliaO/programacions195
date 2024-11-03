<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarLibro extends FormRequest 
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'txtisbn' => 'required|digits:13',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required|string',
            'txtpaginas' => 'required|integer|min:1',
            'txtanio' => 'required|integer|digits:4|min:1000|max:' . date('Y'),
            'txteditorial' => 'required|string',
            'txtemail_editorial' => 'required|email',
        ];
    }
}
