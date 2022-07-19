<?php

namespace App\Implementations\Shipping;

class ShippingTikiImpl implements \App\Interfaces\ShippingInterface
{

    public function send()
    {
        return 'Shipping with Tiki';
    }
}
