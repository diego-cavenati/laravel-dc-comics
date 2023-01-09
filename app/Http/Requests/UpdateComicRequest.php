<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                // Rule::unique('comics')->ignore($this->comic->id),
                'min:2',
                'max:100'
            ],
            'description' => 'nullable|max:255',
            'thumb' => 'nullable',
            'type' => 'nullable|max:50',
            'price' => 'nullable|max:8',
            'series' => 'nullable',
            'sale_date' => 'nullable|max:15',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Non puoi eliminare il titolo',
            'title.unique' => 'Il titolo è già stato assegnato ad un altro Comic',
            'title.min' => 'il titolo deve essere maggiore di :min caratteri',
            'title.max' => 'Il titolo non può superarte i :max caratteri',
            'description.max' => 'la descrizione non deve superare i :max caratteri',
            'type.max' => 'Il tipo non può essere maggiore di :max caratteri',
            'price.max' => 'Il prezzo non può essere maggiore di :max caratteri',
            'series.max' => 'La serie non può essere maggiore di :max caratteri',
            'sale_date.max' => 'La data non può essere maggiore di :max caratteri',
        ];
    }
}
