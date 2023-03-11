<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksis";
    protected $fillable = [
        'id','outlet_id','kode_invoice','member_id','tgl','batas_waktu',
        'tgl_bayar','biaya_tambahan','diskon','pajak','status','dibayar','user_id'
    ];

    public function outlet()
    {
        return $this->belongsTo('App\Models\Outlet','outlet_id');
    }

    public function Member()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function paket()
    {
        return $this->hasOne('App\Models\Paket','paket_id');
    }
    public function detailtransaksi(){
        return $this->belongsTo('App\Models\DetailTransaksi','detailtransaksi')->onDelete(function ($detailtransaksi){
            $detailtransaksi->delete();
        });
    }
}
