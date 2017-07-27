<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'excel' => 'mimetypes:xls'
        ];
    }

    public function messages(){ //pisamos la funcion del controller
        return [
            //'message.required' => 'Por favor, escribe un mensaje',
        ];
    }
}
