<?php

namespace App\Http\Resources;

use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MentorCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'mentors' => $this->collection,
            'specializations' => Specialization::get(['id', 'name']),
        ];
    }
}
