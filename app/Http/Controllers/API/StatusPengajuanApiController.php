<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StatusPengajuanResource;
use App\Models\StatusPengajuan;
use Illuminate\Http\Request;

class StatusPengajuanApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => StatusPengajuanResource::collection(StatusPengajuan::all()),
            'pesan' => 'List pengajuan'
        ]);
    }
}
