<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
			'image' => 'required|min:2|max:500',
			'info' => 'required|min:10|max:3000',
			'web' => 'required|url',
			'spotify' => 'required|url',
			'youtube' => 'required|url',
			'instagram' => 'required|url',
			'twitter' => 'required|url',
			'facebook' => 'required|url'
        ];
    }

	public function messages()
	{
		return [
			'name.required' => 'Debe introducir el nombre del artista',
			'name.min' => 'El nombre debe tener al menos 2 caracteres',
			'name.max' => 'El nombre no puede exceder los 50 caracteres',

			'image.required' => 'Debe introducir una imagen',
			'image.min' => 'La url de la imagen debe tener al menos 2 caracteres',
			'image.max' => 'La url de la imagen no puede exceder los 500 caracteres',

			'info.required' => 'Debe introducir información sobre el artista',
			'info.min' => 'La información debe tener al menos 10 caracteres',
			'info.max' => 'La información no puede exceder los 3000 caracteres'
		];
	}
}
