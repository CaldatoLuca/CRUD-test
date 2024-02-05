<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //di base è false- non autorizzato
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
            'thumb' => 'required|string|url|max:500',
            'price' => 'required|numeric|between:0,9999.99',
            'series' => 'required|string|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:50',
        ];
    }
}
