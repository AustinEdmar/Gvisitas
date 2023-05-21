<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (integer)$this->id,
            'first_name' => (string)$this->first_name,
            'last_name' => (string)$this->last_name,
            'email' => (string)$this->email,
            'created_at' => (string)$this->created_at,
            'phone_number' => (string)$this->phone_number,
            'birthday' => (string)$this->birthday,
            'confirmation_token' => (string)$this->confirmation_token
        ];
    }
}
