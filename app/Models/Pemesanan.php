<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 

class Pemesanan extends Model
{
    use HasFactory;

    public $primaryKey = 'id_pemesanan';
    protected $fillable = ['id_pelanggan', 'id_armada', 'id_sampah', 'id_lokasi', 'tanggal_pemesanan', 'alamat_pengambilan_sampah', 'status_pemesanan'];

    static function getPemesanan(){
        $return = DB::table('pemesanans')
            ->join('sampahs', 'pemesanans.id_sampah', '=', 'sampahs.id_sampah');
        return $return;
    }
   
}
