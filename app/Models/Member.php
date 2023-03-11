<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $fillable = [
        'id','nama','alamat','jenis_kelamin','tlp'
    ];
    public function detailtransaksi(){
        return $this->belongsTo('App\Models\DetailTransaksi', 'detail_transaksi_id', 'id')->onDelete('cascade');
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi','transaksi_id')->onDelete(function ($transaksi){
            $transaksi->delete();
        });
    }
}
