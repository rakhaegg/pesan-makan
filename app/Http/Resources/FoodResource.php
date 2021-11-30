<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_restaurant' => $this->id_restaurant,
            'name' => $this->name,
            'harga' => $this->harga,
            'description' => $this->description,
            'picture' => $this->picture
        ];
    }
}
