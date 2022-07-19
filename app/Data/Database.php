<?php

namespace App\Data;

class Database
{
    public $koneksi;

    /**
     * @param $koneksi
     */
    public function __construct()
    {
        $this->koneksi = new MySQL();
    }


}
