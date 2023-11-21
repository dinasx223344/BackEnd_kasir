<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class StorepemesananRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'meja_id' => 'required',
            'tanggal_pemesan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'nama_pemesan' => 'required',
            'jumlah_pelanggan' => 'required',

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
