<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceProvidersCategories extends JsonResource
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
            'service_providers' => ServiceProviders::collection($this->service_providers),
        ];
//        return parent::toArray($request);
    }
}
