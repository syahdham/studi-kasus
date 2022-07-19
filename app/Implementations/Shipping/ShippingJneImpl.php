<?php

namespace App\Implementations\Shipping;

class ShippingJneImpl implements \App\Interfaces\ShippingInterface
{

    public function send()
    {
        return 'Shipping with Jne';
    }
}
