<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'prod_name' => $this->prod_name,
            'total_price' => round(( 1 - ($this->prod_discount/100)) * $this->prod_price,2),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',
            'discount' => $this->prod_discount,
            'href' => [
                'link' => route('products.show',$this->id)
            ]
        ];
        // return parent::toArray($request);
    }
}
