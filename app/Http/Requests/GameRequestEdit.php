<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GameRequestEdit extends Request
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
    public function rules()
    {
        return [
            'nama_game' => 'required|min:3',
            // 'image'     => 'required|mimes:jpg,jpeg',
            'stok'      => 'required',
            'harga'     => 'required|min:3'
        ];
    }
}
