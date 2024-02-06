<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserinfoRequest extends FormRequest
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
        return
        [
			'user_id' => 'required',
			'nis' => 'required',
			'nama' => 'required',
			'kelas' => 'required',
			'jurusan' => 'required',
			'alamat' => 'required',
			'no_hp' => 'required',
        ];
    }
}
