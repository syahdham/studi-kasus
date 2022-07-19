<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusPengajuan extends Model
{
    use HasFactory;

    protected $table = 'status_pengajuan';
    protected $fillable = ['nama'];
}
