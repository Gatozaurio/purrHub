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
			'image' => 'required|min:2|max50',
			'info' => 'required|min:10|max3000',
			'web' => 'required|url',
			'spotify' => 'required|url',
			'youtube' => 'required|url',
			'instagram' => 'required|url',
			'twitter' => 'required|url',
			'facebook' => 'required|url'
        ];
    }
}
