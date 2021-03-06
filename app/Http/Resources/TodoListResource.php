<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoListResource extends JsonResource
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
            'id'    =>  $this->id,
            'title'    =>  $this->title,
            'desc'    =>  $this->desc,
            'is_finish'    =>  $this->is_finish,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
        ];
    }
}
