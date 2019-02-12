<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcertRequest extends FormRequest
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
            'name'			=>	'required|min:2|max:50',
			'price'			=>	'required|numeric',
			'city'			=>	'required|min:3|max:30',
			'location'			=>	'required|min:3|max:50',
			'address'			=>	'required|min:5|max:100',
			'date'			=>	'required|date',
			'schedule'			=>	'required|min:4|max:1500',
			'ticket'			=>	'required|url',
			'info'			=>	'required|min:10|max:3000'
        ];
    }

	public function messages()
	{
		return [
			'name.required'		=>	'Debe introducir el :attribute',
			'name.min'		=>	'El :attribute debe tener al menos 2 caracteres',
			'name.max'		=>	'El :attribute no puede exceder los 50 caracteres',

			'price.required'		=>	'Debe introducir el :attribute',
			'price.numeric'		=>	'El :attribute debe ser un número',

			'city.required'		=>	'Debe introducir la :attribute donde se realiza el evento',
			'city.min'		=>	'La :attribute debe tener al menos 3 caracteres',
			'city.max'		=>	'La :attribute no puede exceder los 30 caracteres',

			'location.required'		=>	'Debe introducir la :attribute',
			'location.min'		=>	'La :attribute debe tener al menos 2 caracteres',
			'location.max'		=>	'La :attribute no puede exceder los 50 caracteres',

			'address.required'		=>	'Debe introducir la :attribute de la ubicación',
			'address.min'		=>	'La :attribute debe tener al menos 5 caracteres',
			'address.max'		=>	'La :attribute no puede exceder los 100 caracteres',

			'date.required'		=>	'Debe introducir la :attribute',
			'date.date'		=>	'La :attribute debe tener el formato de fecha',

			'schedule.required'		=>	'Debe introducir un :attribute para el evento',
			'schedule.min'		=>	'El :attribute debe tener al menos 4 caracteres',
			'schedule.max'		=>	'El :attribute no puede exceder los 1500 caracteres',

			'ticket.required'		=>	'Debe introducir el :attribute para las entradas',
			'ticket.url'		=>	'El :attribute debe ser una dirección válida',

			'info.required'		=>	'Debe introducir :attribute',
			'info.min'		=>	'La :attribute debe tener al menos 10 caracteres',
			'info.max'		=>	'La :attribute no puede exceder los 3000 caracteres'
		];
	}
	public function attributes()
	{
		return [
			'name' => 'nombre del evento',
			'price' => 'precio del evento',
			'city' => 'ciudad',
			'location' => 'ubicación del evento',
			'address' => 'dirección',
			'date' => 'fecha del evento',
			'schedule' => 'horario',
			'ticket' => 'link de compra',
			'info' => 'información sobre el evento',
		];
	}
}
