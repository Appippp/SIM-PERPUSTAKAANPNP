<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TugasAkhirRequest extends FormRequest
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
            'prodi_id'  => [
                'required', 'integer',
            ],

            'judul'     => [
                'required', 'string', 'max:200',
            ],

            'tahun'     => [
                'required','integer','digits:4',
            ],

            'penulis'   => [
                'required', 'string', 'max:50',
            ],

            'dokumen'   => [
                'required', 'file', 'mimes:pdf,docx,doc', 'max:10240',
            ],
        ];
    }
}
