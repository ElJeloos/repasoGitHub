<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'numISBN' => 'required|min:13',
            'txtTittle' => 'required',
            'txtAutor' => 'required',
            'numPaginas' => 'required',
            'txtEditorial' => 'required',
            'txtCorreo' => 'required'
        ];
    }
}
