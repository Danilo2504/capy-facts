<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneralInformationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'scientific_name' => $this->scientific_name,
            'description' => $this->formatDescription(),
            'weight' => $this->weight,
            'height' => $this->height,
            'length' => $this->length,
            'habitat' => json_decode($this->habitat),
            'distribution' => json_decode($this->distribution),
            'conservation_status' => $this->conservation_status,
            'regional_names' => RegionalNameResource::collection($this->regionalNames)
        ];
    }

    private function formatDescription()
    {
        return preg_replace("/\r|\n/", "", $this->description);
    }
}
