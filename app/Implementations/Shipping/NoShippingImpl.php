<?php

namespace App\Implementations\Shipping;

class NoShippingImpl implements \App\Interfaces\ShippingInterface
{

    public function send()
    {
        return 'Belum terdaftar';
    }
}
