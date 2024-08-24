<?php

namespace App\Http\Resources\V1;

use App\Http\Resources\V1\SourceResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "description" => $this->description,
            // "date" => $this->created_at->format('l j \\of F Y'),
            "date" => $this->created_at->format('Y-m-d'),
            "sources" => SourceResource::collection($this->sources),
        ];
    }
}
