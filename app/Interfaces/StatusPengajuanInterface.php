<?php

namespace App\Interfaces;

interface StatusPengajuanInterface
{
    public function all() : object;
    public function store(array $data) : object;
}
