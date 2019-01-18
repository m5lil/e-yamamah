<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Service extends JsonResource
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
            "sdk_id"      => $this->sdk_id,
//          "commission_id"      => $this->commission_id,
            "output"      => $this->output,
            "name"      => $this->name,
            "request_amount"      => $this->request_amount,
            "status"      => $this->status,
            "icon"      => url('/images/services'). '/' . $this->icon,
            "order"      => $this->order,
        ];
//        return parent::toArray($request);
    }
}
