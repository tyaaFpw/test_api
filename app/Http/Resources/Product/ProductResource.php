<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'prod_name' => $this->prod_name,
            'prod_description' => $this->prod_desc,
            'price' => $this->prod_price,
            'stock' => $this->prod_stock,
            'discount' => $this->prod_discount
        ];
    }
}
