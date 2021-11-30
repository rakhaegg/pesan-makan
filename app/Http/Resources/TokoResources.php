<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TokoResources extends JsonResource
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
            
            'restaurant_id' => $this->restaurant_id,
            'name' => $this->name,
            'description ' => $this->description,
            'pictureId' => $this->pictureId,
            'city' => $this->city,
            'rating' => (double)$this->rating,
        ];
    }
}
