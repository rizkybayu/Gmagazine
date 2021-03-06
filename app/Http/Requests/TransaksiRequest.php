<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TransaksiRequest extends Request
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
            'id' => 'required',
            'nama' => 'required|min:3',
            'email'=>'required|email',
            'no_hp' => 'required',
            'jumbel' => 'required',
            'nama_game' => 'required'
        ];
    }
}
