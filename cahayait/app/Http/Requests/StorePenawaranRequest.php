<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenawaranRequest extends FormRequest
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
            'file' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'prusahaan.required' => 'Prusahaan wajib diisi',
        ];
    }
}
