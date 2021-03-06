<?php

namespace App\Http\Requests;

use App\Http\Requests\OffreStore;
use Illuminate\Foundation\Http\FormRequest;

class OffreStore extends FormRequest
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
            'title' => ['required', 'string', 'max:100'],
            'texte' => ['required', 'string', 'max:1000'],
            'pseudo' => ['sometimes', 'string', 'max:20'],
            'email' => ['sometimes', 'string', 'email', 'max:255'],
        ];
    }
}
