<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Outlet;
use App\Models\Member;
use APP\Models\User;
use App\Models\Paket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksis = Transaksi::all();
        $members = Member::all();
        $pakets = Paket::all()->where('outlets_id', Auth()->user()->outlets_id);
        $outlets = Outlet::all();
        $users = User::all();
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('members', 'pakets', 'transaksis', 'outlets', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Transaksi $transaksi, Request $request)
    {
        //
        $transaksi = new Transaksi;
        $transaksi->outlet_id       = Auth::user()->outlet_id;
        $transaksi->kode_invoice    = '';
        $transaksi->member_id       = '1';
        $transaksi->tgl             = Carbon::now()->format('Y-m-d');
        $transaksi->batas_waktu     = Carbon::now()->format('Y-m-d');
        $transaksi->tgl_bayar       = Carbon::now()->format('Y-m-d');
        $transaksi->biaya_tambahan  = 0;
        $transaksi->diskon          = 0;
        $transaksi->pajak           = 0;
        $transaksi->status          = 'baru';
        $transaksi->dibayar         = 'belum_dibayar';
        $transaksi->user_id        = Auth::user()->id;
        $transaksi->save();
        // session(['id_penjualan' => $transaksi->id]);
        // return view('transaksi.create', compact('members', 'pakets'));
        return redirect()->route('transaksi.proses', $transaksi->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'outlet_id'            => 'required',
        //     'kode_invoice'          => 'required',
        //     'members_id'            => 'required',
        //     'tgl'                   => 'required',
        //     'batas_waktu'           => 'required',
        //     'tgl_bayar'             => 'required',
        //     'biaya_tambahan'        => 'required',
        //     'diskon'                => 'required',
        //     'pajak'                 => 'required',
        //     'status'                => 'required',
        //     'dibayar'               => 'required',
        //     'user_id'               => 'required',
        // ]);
        // Transaksi::create([
        //     'outlet_id'            => $request->outlet_id,
        //     'kode_invoice'          => $request->kode_invoice,
        //     'members_id'            => $request->members_id,
        //     'tgl'                   => $request->tgl,
        //     'batas_waktu'           => $request->batas_waktu,
        //     'tgl_bayar'             => $request->tgl_bayar,
        //     'biaya_tambahan'        => $request->biaya_tambahan,
        //     'diskon'                => $request->diskon,
        //     'pajak'                 => $request->pajak,
        //     'status'                => $request->status,
        //     'dibayar'               => $request->dibayar,
        //     'user_id'               => $request->user_id,
        // ]);
        // return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
        $members     = Member::all();
        $outlets    = Outlet::all();
        $users       = User::all();
        $transaksis  = Transaksi::find($transaksi->id);
        return view('transaksi.show', compact('transaksis', 'members', 'outlets', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi, Paket $paket)
    {
        //
        $transaksis = Transaksi::all();
        $pakets = Paket::all();
        $members = Member::all();
       return view('transaksi.proses', compact('pakets', 'members','transaksis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
        $request->validate([
            'outlet_id'            => 'required',
            'kode_invoice'          => 'required',
            'members_id'            => 'required',
            'tgl'                   => 'required',
            'batas_waktu'           => 'required',
            'tgl_bayar'             => 'required',
            'biaya_tambahan'        => 'required',
            'diskon'                => 'required',
            'pajak'                 => 'required',
            'status'                => 'required',
            'dibayar'               => 'required',
            'user_id'               => 'required',
        ]);
        $transaksi = Transaksi::find($transaksi->id);
        $transaksi-> outlet_id         = $request->outlet_id;
        $transaksi-> kode_invoice       = $request->kode_invoice;
        $transaksi-> members_id         = $request->members_id;
        $transaksi-> tgl                = $request->tgl;
        $transaksi-> batas_waktu        = $request->batas_waktu;
        $transaksi-> tgl_bayar          = $request->tgl_bayar;
        $transaksi-> biaya_tambahan     = $request->biaya_tambahan;
        $transaksi-> diskon             = $request->diskon;
        $transaksi-> pajak              = $request->pajak;
        $transaksi-> status             = $request->status;
        $transaksi-> dibayar            = $request->dibayar;
        $transaksi-> user_id            = $request->user_id;
        $transaksi->update();
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
        $transaksi = Transaksi::find($transaksi->id);
        $transaksi->delete();
        return redirect('/transaksi');
    }
}