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
            'start_date' => request()->input('start_date'),
            'end_date' => request()->input('end_date'),
            'status' => request()->input('status'),
        ];

        $filteredItems = $this->getFilteredData($data);

        return view('Admin.Laporan.index', ['laporans' => $filteredItems, 'filterData' => $data]);
    }

    public function cetakview()
    {
        $data = request()->query();

        $filteredItems = $this->getFilteredData($data);

        return view('Admin.Laporan.cetak', ['laporans' => $filteredItems, 'filterData' => $data, 'print' => true]);
    }

    private function getFilteredData($data)
    {
        $filteredItems = DB::table('tb_laporan')
            ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
            ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
            ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi');

        // Pemeriksaan apakah elemen 'start_date' dan 'end_date' ada dalam array
        if (isset($data['start_date']) && isset($data['end_date'])) {
            $filteredItems->whereBetween('tanggal', [$data['start_date'], $data['end_date']]);
        }

        if (isset($data['status'])) {
            $filteredItems->where('status', $data['status']);
        }

        return $filteredItems->get();
    }

    public function detail($id)
    {
        $data = [
            'laporans' =>$this->Laporan->DetailData($id),
        ];
        return view('Admin.Laporan.detail', $data);
    }

    public function cetakall()
    {
        $data = [
            'laporans' => $this->Laporan->TampilData()
        ];

        return view('Admin.Laporan.cetak', $data);
    }

}
