<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class CommentResource extends JsonResource
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
            'comment' => $this->comment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'user' => new UserResource($this->user)
            'user' => [
                "id" => $this->user->id,
                "name" => $this->user->name,
                "user_name" => $this->user->user_name,
                "avatar_path" => Storage::url($this->user->avatar_path),
            ]
        ];
    }
}
