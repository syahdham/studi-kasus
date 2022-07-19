<?php

namespace App\Http\Controllers;

use App\Interfaces\ShippingInterface;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function shipping($ekspedisi)
    {
        switch ($ekspedisi) {
            case 'jne':
                return 'Shipping Jne';
            case 'tiki':
                return 'Shipping Tiki';
            case 'ninja':
                return 'Shipping Ninja';
            default:
                return 'Pilihan tidak ada';
        }

    }

    public function shippingo(ShippingInterface $shipping)
    {
        $ekspedisi = $shipping->send();

        dd($ekspedisi);
    }
}
