<?php

namespace App\Http\Controllers;

use App\Constants\MessageConstant;
use App\Models\StatusPengajuan;
use DB;
use App\DataTables\StatusPengajuanDataTable;
use App\Http\Requests\StatusPengajuanRequest;
use App\Interfaces\StatusPengajuanInterface;
use Illuminate\Support\Facades\App;

class StatusPengajuanController extends Controller
{
    public function index(StatusPengajuanDataTable $dataTable)
    {
        return $dataTable->render('pages.status_pengajuan.index');
    }

    public function create()
    {
        return view('pages.status_pengajuan.create');
    }

    public function store(StatusPengajuanRequest $request, StatusPengajuanInterface $statusPengajuan)
    {
        DB::beginTransaction();

        try {
            $statusPengajuan->store($request->validated());

            DB::commit();

            return redirect()->route('status.index')->with('success', MessageConstant::PESAN_BERHASIL);

        } catch (\Throwable $th) {
            DB::rollback();

            if(App::environment('production')) {
                $this->errorLog(\Route::getCurrentRoute()->getActionName(), get_class(), $th->getMessage());
            }

            return redirect()->back()->with('error', MessageConstant::PESAN_GAGAL);
        }
    }

    public function edit(StatusPengajuan $status)
    {
        return view('pages.status_pengajuan.edit', compact('status'));
    }

    public function update(StatusPengajuanRequest $request, StatusPengajuan $status)
    {
        $status->update($request->validated());

        return redirect()->route('status.index')->with('success', MessageConstant::PESAN_BERHASIL);
    }

    public function destroy(StatusPengajuan $status)
    {
        $status->delete();

        return redirect()->route('status.index')->with('success', MessageConstant::PESAN_BERHASIL);
    }

}
