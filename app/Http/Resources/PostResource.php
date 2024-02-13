<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => $this->user,
            'group' => $this->group,
            'attachments' => PostAttachmentResource::collection($this->attachments),
            'num_reactions_count'=>$this->reactions_count,
            'num_reactions_count'=>$this->comments_count,
            'has_reactions' => $this->reactions->count() > 0,
            'comments' => $this->latest5Comments

        ];
    }
}
