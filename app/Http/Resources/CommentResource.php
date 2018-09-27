<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'text' => $this->resource->text,
            'dates' => [
                'created' => $this->resource->created_at->toDatetimeString(),
                'updated' => $this->resource->updated_at->toDatetimeString()
            ]
        ];
    }
}
