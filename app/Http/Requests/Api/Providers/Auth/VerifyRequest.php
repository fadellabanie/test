<?php

namespace App\Http\Requests\Api\Providers\Auth;

use Illuminate\Foundation\Http\FormRequest;

class VerifyRequest extends FormRequest
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
            // 'mobile' => ['required',new Phone],
            'mobile' => 'required|exists:providers,mobile',
            'verification_code' => 'required|numeric'
         ];
    }
}
