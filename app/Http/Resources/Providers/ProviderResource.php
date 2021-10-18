<?php

namespace App\Http\Resources\Providers;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'country_code' => $this->country_code,
            'city_id' => $this->city_id,
            'country_id' => $this->country_id,
            'nationality_id' => $this->nationality_id,
            'avatar' => $this->avatar,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'country_of_residence' => $this->country_of_residence,
            'avatar' => asset($this->avatar),
            'created_at' => (string) $this->created_at,
            'verified' =>(string) $this->mobile_verified_at,
            'token_type' => 'Bearer',
            'access_token' => $this->remember_token,
        ];
    }
}
