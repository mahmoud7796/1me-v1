<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
            'card' => 'required|max:100|regex:/^[a-zA-Z]+$/u|max:255',
        ];
    }
    public function messages()
    {
        return [
            'card.regex' => 'Card must be only letter.',
        ];
    }

}
