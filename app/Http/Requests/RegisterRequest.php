<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array {
        return [
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
            'login' => 'required|min:5|max:50|unique:clients',
            'password' => 'required|min:8|max:50',
            'birthday' => 'required|date',
            'mail' => 'required|email|unique:clients',
            'phone' => 'required||numeric|min:10',
        ];
    }
}
