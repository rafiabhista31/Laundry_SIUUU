<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    
    protected $table = "pakets";
    protected $fillable = [
        'id','outlet_id','jenis','nama_paket','harga'
    ];

    public function outlet()
    {
        return $this->belongsTo('App\Models\Outlet', 'outlet_id');
    }
    public function detailtransaksi()
    {
        return $this->belongsTo('App\Models\DetailTransaksi','transaksi')->onDelete(function ($detailtransaksi){
            $detailtransaksi->delete();
        });
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi','transaksi')->onDelete(function ($transaksi){
            $transaksi->delete();
        });
    }
}