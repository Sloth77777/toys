<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'role' => 'required|exists:roles,name',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Поле user_id обязательно.',
            'user_id.exists' => 'Указанный пользователь не найден.',
            'role.required' => 'Поле role обязательно.',
            'role.exists' => 'Указанная роль не существует.',
        ];
    }
}
