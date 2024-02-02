<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'body' => $this->body,
            'created_at' => $this->created_at->formate('d-m-y H:i:s'),
            'updated_at' => $this->updated_at->formate('d-m-y H:i:s'),
            'user' => $this->user,
            'group' => $this->group,
            'attachments' => $this->attachments,
        ];
    }
}