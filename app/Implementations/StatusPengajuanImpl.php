<?php

namespace App\Implementations;

use App\Models\StatusPengajuan;

class StatusPengajuanImpl implements \App\Interfaces\StatusPengajuanInterface
{
    public function all() : object
    {
        return StatusPengajuan::all();
    }

    public function store(array $data): object
    {
        return StatusPengajuan::create($data);
    }
}
