<?php

namespace App\Http\Controllers;

use App\Data\Database;
use App\Data\Pegawai\Dosen;
use App\Data\Pegawai\PegawaiMetro;
use App\Data\Pegawai\Satpam;
use Illuminate\Http\Request;

class PegawaiMetroController extends Controller
{
    public function pegawaiMetro()
    {
        // DB PGSQL
        $DB = new Database();
        $dosen = new Dosen();
        $satpam = new Satpam();
        dd($satpam->);
    }
}
