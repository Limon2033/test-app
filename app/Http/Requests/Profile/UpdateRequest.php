<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'patronymic' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'age' => ['required', 'numeric', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'specialization' => ['required', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:4000'],
            'address' => ['required', 'string', 'max:255'],
        ];
    }
}
