<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    public function TampilData()
    {
        return DB::table('tb_laporan')
        ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
        ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
        ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
        ->get();
    }

    public function HitungData()
    {
        return DB::table('tb_laporan')
        ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
        ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
        ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
        ->count();
    }

}
