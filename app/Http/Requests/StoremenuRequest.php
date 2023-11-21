<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoremenuRequest extends FormRequest
{
  
    public function rules(): array
    {
        return [
            'nama_menu' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
            'jenis_id' => 'required',
        ];
    }
    public function failedValication(Validator $validator): array
    {
        throw new HttpResponseException(response()->json([
            'succes' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors()
        ]));
    }
}
