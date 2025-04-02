<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GtareaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'id_tarea' => 'required',
			'D_tarea' => 'required|string',
			'Estatus' => 'required|string',
			'F_publicasion' => 'required|string',
			'Comentarios' => 'required|string',
			'usuario' => 'required|string',
        ];
    }
}
