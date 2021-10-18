<?php

namespace App\Http\Requests\Api\Providers\Auth;

use App\Http\Requests\Api\APIRequest;

class RegisterRequest extends APIRequest
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
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
            'nationality_id' => 'required|exists:nationalities,id',
            'full_name' => 'required|min:3|max:100',
            'country_of_residence' => 'required|min:3|max:100',
            'email' => 'required|email|unique:providers',
            'mobile' => 'required|unique:providers',
            'country_code' => 'required',
            'password' => 'required|min:8',
            'avatar' => 'required',
            'birthday' => 'required|date|date_format:Y-m-d',
            'gender' => 'required|in:1,2,3',
          
        ];
    }
}
