<?php

namespace App\Http\Requests\User\Input;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nis' => 'required|numeric|digits_between:6,16',
            'nama_siswa' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tahun' => 'date',
            'asal_kota' => 'required|string',
            'asal_sekolah' => 'required|string'
        ];
    }
}
