<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Member;
use App\Models\Paket;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function admin()
    {
        $details = DetailTransaksi::all();
        $pakets = Paket::orderBy('harga')->get();

        $total = 0;
        $countTransaksi = Transaksi::count();
        foreach ($details as $detail) {
            $paket = $pakets->where('id', $detail->paket_id)->first();
            $total += $paket->harga * $detail->qty;
        }

        return view('dashboard.admin', compact('total','countTransaksi'));


    }

    public function kasir()
    {
        $details = DetailTransaksi::all();
        $pakets = Paket::orderBy('harga')->get();
        $members = Member::all();
        $transaksis = Transaksi::all();
        $transactions = DetailTransaksi::select(DB::raw('DATE(detail_transaksis.created_at) as tgl, COUNT(*) as transaction_count, SUM(pakets.harga * detail_transaksis.qty) as transaction_total'))
                ->leftJoin('pakets', 'detail_transaksis.paket_id', '=', 'pakets.id')
                ->groupBy('tgl')
                ->orderBy('tgl', 'desc')
                ->get();
                $total = 0;
            $countTransaksi = Transaksi::count();
            foreach ($details as $detail) {
                $paket = $pakets->where('id', $detail->paket_id)->first();
                $total += $paket->harga * $detail->qty;
            }
        return view('dashboard.kasir', compact('members','transaksis','transactions','total','countTransaksi'));
    }

    public function owner()
    {
            $details = DetailTransaksi::all();
            $pakets = Paket::orderBy('harga')->get();

            $total = 0;
            $countTransaksi = Transaksi::count();
            foreach ($details as $detail) {
                $paket = $pakets->where('id', $detail->paket_id)->first();
                $total += $paket->harga * $detail->qty;
            }

            return view('dashboard.owner', compact('total','countTransaksi'));

    }
}
