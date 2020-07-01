<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Params extends FormRequest
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
            'q' => 'required_without:lat,lon',
            'lat' => 'required_with:lon',
            'lon' => 'required_with:lat'
        ];
    }
}
