<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReciboResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [            
            'id' => $this->id,
            'nombre' => $this->nombre,
            'usuario' => $this->usuario,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
