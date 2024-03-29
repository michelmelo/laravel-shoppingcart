<?php

namespace MichelMelo\Tests\Shoppingcart\Fixtures;

use Illuminate\Database\Eloquent\Model;
use MichelMelo\Shoppingcart\Contracts\Buyable;

class BuyableProductTrait extends Model implements Buyable
{
    use \MichelMelo\Shoppingcart\CanBeBought;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
        'price',
        'weight',
    ];

    protected $attributes = [
        'id'     => 1,
        'name'   => 'Item name',
        'price'  => 10.00,
        'weight' => 0,
    ];
}
