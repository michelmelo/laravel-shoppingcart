<?php

namespace MichelMelo\Shoppingcart\Contracts;

use MichelMelo\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
