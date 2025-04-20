<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'email' => 'required'|'email',
            'password' => 'required',   
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'bạn chưa nhập email.',
            'email.email' => 'email chưa đúng định dạng.',
            'password.required' => 'bạn chưa nhập mật khẩu.',
        ];
    }
}
