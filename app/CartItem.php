<?php

namespace App;


class CartItem
{
    public function getTotalPriceWithFormat(){
        return sprintf('%s', number_format($this->product->DiscountPrice * $this->quantity, 0));
    }
}