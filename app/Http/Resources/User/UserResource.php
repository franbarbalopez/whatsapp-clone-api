<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'phone_number' => $this->phone_number,
            'name' => $this->name,
            'information' => $this->information,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
