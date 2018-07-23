<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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

            'naslov' => $this->title,
            'tekst' => $this->body,
            'kreiran' => $this->created_at->diffForHumans()
            /*'count' => $this->count(),*/
        ];
    }
}
