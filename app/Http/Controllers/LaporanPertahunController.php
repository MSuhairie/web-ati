<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanPertahunController extends Controller
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
        return view('Admin.LaporanPertahun.index', $data);
    }

    public function filter()
    {
        $data = [
            'tahun' => request()->input('tahun'),
            'status' => request()->input('status'),
        ];

        $filteredItems = $this->getFilteredData($data);

        return view('Admin.LaporanPertahun.index', ['laporans' => $filteredItems, 'filterData' => $data]);
    }

    public function cetakview()
    {
        $data = request()->query();

        $filteredItems = $this->getFilteredData($data);

        return view('Admin.LaporanPertahun.cetak', ['laporans' => $filteredItems, 'filterData' => $data, 'print' => true]);
    }

    private function getFilteredData($data)
    {
        $filteredItems = DB::table('tb_laporan')
            ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
            ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
            ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi');

        // Pemeriksaan apakah elemen 'tahun' ada dalam array
        if (isset($data['tahun'])) {
            $filteredItems->whereYear('tanggal', $data['tahun']);
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
        return view('Admin.LaporanPertahun.detail', $data);
    }

    public function cetakall()
    {
        $data = [
            'laporans' => $this->Laporan->TampilData()
        ];

        return view('Admin.LaporanPertahun.cetak', $data);
    }
}
