<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $Laporan;
    public function __construct()
    {
        $this->Laporan = new Laporan();
    }
    public function index()
    {
        $data = [
            'laporans' => $this->Laporan->HitungData(),
            'laporans1' => $this->Laporan->TampilDataDiterimaAdmin(),
            'laporans2' => $this->Laporan->TampilDataSedangDikerjakan(),
            'laporans3' => $this->Laporan->TampilDataSelesai(),
        ];
        return view('Admin.Home.home', $data);
    }
}
