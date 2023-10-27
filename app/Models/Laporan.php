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
        ->select('*', 'tb_laporan.id as id')
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
        ->select(
            'tb_laporan.*',
            'pelapor.name as nama_pelapor',
            'teknisi.name as nama_teknisi',
            DB::raw('(SELECT COUNT(*) FROM tb_laporan WHERE status = "sudah diterima admin") as sudah_diterima_admin'),
            DB::raw('(SELECT COUNT(*) FROM tb_laporan WHERE status = "sedang dikerjakan") as sedang_dikerjakan'),
            DB::raw('(SELECT COUNT(*) FROM tb_laporan WHERE status = "selesai") as selesai'),
            DB::raw('(SELECT COUNT(*) FROM tb_laporan) as total_semua_laporan')
        )
        ->first();
    }

    public function DetailData($id)
    {
        return DB::table('tb_laporan')
        ->select('*', 'tb_laporan.id as id')
        ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
        ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
        ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
        ->where('tb_laporan.id', $id)
        ->first();
    }

    public function TampilDataDiterimaAdmin()
    {
        return DB::table('tb_laporan')
        ->select('*', 'tb_laporan.id as id')
        ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
        ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
        ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
        ->where('status', 'sudah diterima admin')
        ->get();
    }

    public function TampilDataSedangDikerjakan()
    {
        return DB::table('tb_laporan')
        ->select('*', 'tb_laporan.id as id')
        ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
        ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
        ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
        ->where('status', 'sedang dikerjakan')
        ->get();
    }

    public function TampilDataSelesai()
    {
        return DB::table('tb_laporan')
        ->select('*', 'tb_laporan.id as id')
        ->leftJoin('tb_user_android as pelapor', 'tb_laporan.id_pelapor', '=', 'pelapor.id')
        ->leftJoin('tb_user_android as teknisi', 'tb_laporan.id_teknisi', '=', 'teknisi.id')
        ->select('tb_laporan.*', 'pelapor.name as nama_pelapor', 'teknisi.name as nama_teknisi')
        ->where('status', 'selesai')
        ->get();
    }

}
