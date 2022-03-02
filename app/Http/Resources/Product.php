<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /*
            Tra ve 1 JSON dang
            {
                "data": [
                    {
                        'id': 1,
                        ...
                    },
                    ...
                ]
            }

            Nen o FE phai chuyen doi lai thanh 1 mang
        */
        return [
            'product_id' => $this->product_id,
            'cate_id' => $this->cate_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'size' => $this->sizes,
            'desc' => $this->desc,
            'image' => $this->images
        ];
    }

    public static function setProduct($request)
    {
        return [
            'cate_id' => $request->cate_id,
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'price' => $request->price,
            'desc' => $request->desc
        ];
    }
}
