<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class EventContactMailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'event_date' => 'required|date',
            'event_guests' => 'required|integer',
            'message' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'phone.required' => 'El teléfono es requerido',
            'event_date.required' => 'La fecha del evento es requerida',
            'event_date.date' => 'La fecha del evento no es válida',
            'event_guests.required' => 'El número de invitados es requerido',
            'event_guests.integer' => 'El número de invitados no es válido',
        ];
    }
}
