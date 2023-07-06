<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ManageSubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (integer)$this->id,
            'object_left' => (string)$this->object_left,
            'motive' => (string)$this->motive,
            'by' => (string)$this->by,
            'pvc_id' => (integer)$this->pvc_id,
            'progress_id' => (integer)$this->progress_id,
            'user_id' => (integer)$this->user_id,
            'visitor_id' => (integer)$this->visitor_id,
            'thing_id' => (integer)$this->thing_id,
            
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
        ];
    }
}
