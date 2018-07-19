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
            'stock' => $this->prod_stock == 0 ? 'Out of stock' : $this->stock,
            'discount' => $this->prod_discount,
            'total_price' => round(( 1 - ($this->prod_discount/100)) * $this->prod_price,2),
            // 'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',
            'href' => [
                'reviews' => route('reviews.index',$this->id)
            ]
        ];
    }
}
