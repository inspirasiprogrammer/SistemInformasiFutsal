<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            "tanggal" => $this->tanggal,
            "harga" => $this->item->beli,
            "sesi" => $this->sesi,
            "lama" => $this->lama,
                
            ];
    }
}
