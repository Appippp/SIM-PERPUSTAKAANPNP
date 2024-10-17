<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
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

            'kategori_id' => [
                'required', 'integer',
            ],

            'prodi_id' => [
                'required', 'integer',
            ],

            'judul' => [
                'required', 'string', 'max:200',
            ],

            'tahun' => [
                'required', 'integer', 'digits:4',
            ],

            'penulis' => [
                'required', 'string', 'max:100',
            ],

            'penerbit' => [
                'required', 'string', 'max:100'
            ],

            'jumlah' => [
                'required', 'integer', 'max:9',
            ],

            'deskripsi' => [
                'required', 'string', 'max:10000',
            ],

            'foto'  => [
                'sometimes', 'image', 'mimes:jpeg,png,PNG,JPG,svg,jpg', 'max:2048',
            ],


        ];
    }
}
