<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoremejaRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'nomor_meja' => 'required',
            'kapasitas' => 'required',
            'status' => 'required',
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
