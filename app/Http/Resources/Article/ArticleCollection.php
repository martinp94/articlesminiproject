<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Article;

class ArticleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        $articles = $this->collection->transform(function(Article $article) {
            
            return new ArticleResource($article);
        });

        //dd($this->collection);

        return [
            "broj članaka" => $this->collection->count(),
            "članci" => $articles

        ];

        return parent::toArray($request);
    }
}
