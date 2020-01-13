<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LapbResource extends JsonResource
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
            "delapan" => $this->delapan,
            "sembilan" => $this->sembilan,
            "sepuluh" => $this->sepuluh,
            "sebelas" => $this->sebelas,
            "duabelas" => $this->duabelas,
            "tigabelas" => $this->tigabelas,
            "empatbelas" => $this->empatbelas,
            "limabelas" => $this->limabelas,
            "enambelas" => $this->enambelas,
            "tujuhbelas" => $this->tujuhbelas,
            "delapanbelas" => $this->delapanbelas,
            "sembilanbelas" => $this->sembilanbelas,
            "duapuluh" => $this->duapuluh,
            "duapuluhsatu" => $this->duapuluhsatu,
            "duapuluhdua" => $this->duapuluhdua,
            
        ];
    }
}
