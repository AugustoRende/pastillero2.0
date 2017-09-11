<?php

namespace Pastillero\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorCreateRequest extends FormRequest
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
            'code' => 'required|unique:doctors',
            'name' => 'required',
            'last_name' => 'required',
            // 'email' => 'email|unique:doctors',
            // 'mobile' => 'integer',
            'apm_id' => 'required|exists:apms,id',
        ];
    }
}
