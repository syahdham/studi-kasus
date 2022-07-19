<?php

namespace App\Implementations\Shipping;

class ShippingPosImpl implements \App\Interfaces\ShippingInterface
{

    public function send()
    {
        return 'shipping POS';
    }
}
