<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|digits_between:9,12|unique:users,phone',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->email && !$this->phone) {
                $validator->errors()->add('email', 'Vui lòng nhập email hoặc số điện thoại');
                $validator->errors()->add('phone', 'Vui lòng nhập email hoặc số điện thoại');
            }
        });
    }

    public function messages(): array
    {
        return [
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã được sử dụng',
            'phone.digits_between' => 'Số điện thoại phải từ 9 đến 12 chữ số',
            'phone.unique' => 'Số điện thoại đã được sử dụng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
        ];
    }
}
