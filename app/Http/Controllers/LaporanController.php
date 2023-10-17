<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    private $Laporan;

    public function __construct()
    {
        $this->Laporan = new Laporan();
    }
    public function index()
    {
        $data = [
            'laporans' => $this->Laporan->TampilData(),
        ];
        return view('Admin.Laporan.index', $data);
    }

    public function filter()
    {
        $data = [
            'start_date' => Request()->start_date,
            'end_date' => Request()->end_date,
        ];

        $filteredItems = DB::table('tb_laporan')
            ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
            ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
            ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
            ->whereBetween('tanggal', [$data])
            ->get();

        return view('Admin.Laporan.index', ['laporans' => $filteredItems]);
    }

}
