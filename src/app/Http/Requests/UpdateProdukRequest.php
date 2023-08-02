<?php

namespace App\Http\Requests;

use App\Models\Produk;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProdukRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('produk_edit');
    }

    public function rules()
    {
        return [
            'produkname' => [
                'string',
                'required',
            ],
            'brand' => [
                'string',
                'required',
            ],
            'kategori' => [
                'string',
                'required',
            ],
            'kadaluarsa' => [
                'string',
                'required',
            ],
            'harga' => [
                'string',
                'required',
            ],
            
        ];
    }
}
