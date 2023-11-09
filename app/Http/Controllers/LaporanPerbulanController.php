<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanPerbulanController extends Controller
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
        return view('Admin.LaporanPerbulan.index', $data);
    }

    public function filter()
    {
        $data = [
            'bulan' => request()->input('bulan'),
            'tahun' => request()->input('tahun'),
            'status' => request()->input('status'),
        ];

        $filteredItems = $this->getFilteredData($data);

        return view('Admin.LaporanPerbulan.index', ['laporans' => $filteredItems, 'filterData' => $data]);
    }

    public function cetakview()
    {
        $data = request()->query();

        $filteredItems = $this->getFilteredData($data);

        return view('Admin.LaporanPerbulan.cetak', ['laporans' => $filteredItems, 'filterData' => $data, 'print' => true]);
    }

    private function getFilteredData($data)
    {
        $filteredItems = DB::table('tb_laporan')
            ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
            ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
            ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi');

        // Pemeriksaan apakah elemen 'start_date' dan 'end_date' ada dalam array
        if (isset($data['bulan']) && isset($data['tahun'])) {
            $startDate = $data['tahun'] . '-' . $data['bulan'] . '-01';
            $endDate = date('Y-m-t', strtotime($startDate)); // Mendapatkan tanggal terakhir dari bulan tersebut
            $filteredItems->whereBetween('tanggal', [$startDate, $endDate]);
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
        return view('Admin.LaporanPerbulan.detail', $data);
    }

    public function cetakall()
    {
        $data = [
            'laporans' => $this->Laporan->TampilData()
        ];

        return view('Admin.LaporanPerbulan.cetak', $data);
    }
}
