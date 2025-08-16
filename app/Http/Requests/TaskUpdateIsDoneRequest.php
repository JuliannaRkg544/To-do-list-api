<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateIsDoneRequest extends FormRequest
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
        'is_done' => 'required|boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'is_done.required' => 'É obrigatório informar se a tarefa foi feita ou não.'
        ];
    }
}
