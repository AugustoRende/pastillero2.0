<?php

namespace Pastillero\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientCreateRequest extends FormRequest
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
            'username' => 'email|required|unique:patients',
            'name' => 'required',
            'last_name' => 'required',
            'birth' => 'date',
            'password' => 'required',
        ];
    }
}
