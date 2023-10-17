<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->Laporan = new Laporan();
    }
    public function index()
    {
        $data = [
            'laporans' => $this->Laporan->HitungData(),
        ];
        return view('Admin.Home.home', $data);
    }
}
