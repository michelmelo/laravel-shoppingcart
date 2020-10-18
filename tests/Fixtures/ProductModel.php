<?php

namespace MichelMelo\Tests\Shoppingcart\Fixtures;

class ProductModel
{
    /**
     * @var string
     */
    public $someValue = 'Some value';

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this;
    }
}
