<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
        $rules = [
           'titulo' => 'required',
           'autor' => 'required',
           'isbn' => ['required','integer'],
        ];
        if($this->method() == 'PATCH' || $this->method() == 'PUT'){
            array_push($rules['isbn'], 'unique:livros,isbn,' . $this->livro->id);
        } else{
            array_push($rules['isbn'], 'unique:livros,isbn,');
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'isbn.required' => 'Não deixe este campo vazio!',
        ];
    }
}
