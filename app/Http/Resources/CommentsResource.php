<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentsResource extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'count' => $this->collection->count(),
            'comments' => parent::toArray($request),
        ];
    }
}
