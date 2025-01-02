<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $array = [];
        $a = [];
        for ($i = 1; $i <= 31; $i++) {
            $array = Arr::add($array, 'date' . $i, random_int(0, 12));
        }
        $array = Arr::add($array, 'name', $this->name);
        $array = Arr::add($array, 'id', $this->id);
        return $array;
//        return [
////            'id' => $this->id,
//            'name' => $this->name,
//            'date1' => random_int(0, 12)
////            'email' => $this->email,
////            'created_at' => Carbon::create($this->created_at)->format('d-m-Y'),
////            'rating' => random_int(0, 5), // or $this->rating in your model attributes
////            'updated_at' => $this->updated_at->format('d-m-Y'),
////            'expanded' => $this->expanded, // or $this->rating in your model attributes
////            'checkbox1' => (bool)random_int(0, 1),
////            'checkbox2' => (bool)random_int(0, 1),
////            'checkbox3' => (bool)random_int(0, 1),
//
//        ];
    }
}
