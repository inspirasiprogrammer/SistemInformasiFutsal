<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BuktibResource extends JsonResource
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
            "tanggal" => $this->lapb->tanggal,
            "harga" => $this->item->jual,
            "sesi" => $this->sesi,
            "lama" => $this->lama,
                
            ];
    }
}
