<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
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
            'id'=> $this->id,
            'name'=> $this->name,
            'bank' => $this->bank,
            'bonus'=>$this->bonus,
            'business' => $this->business,
            'cashback' => $this->cashback,
            'premium' => $this->premium,
            'annual_fee' => $this->annual_fee,
            'app_link' => $this->app_link,
            'img_path' => $this->img_path,
        ];
    }
}
