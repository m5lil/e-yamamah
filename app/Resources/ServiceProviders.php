<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceProviders extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"      => $this->id,
            "name"      => $this->name,
            "icon"      => url('/images/services'). '/' . $this->icon,
            "status"      => $this->status,
            "order"      => $this->order,
            "services"      => Service::collection($this->services),
        ];
//        return parent::toArray($request);
    }
}
