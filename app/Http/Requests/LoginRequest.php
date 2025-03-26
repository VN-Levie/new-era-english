<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cho phép mọi request dùng
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
        ];
    }
}
