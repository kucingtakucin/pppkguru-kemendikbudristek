<?php

namespace App\Http\Controllers\Admin\Pengaduan;

use App\Http\Controllers\Controller;
use App\Models\PengaduanJudul;
use App\Models\PengaduanRiwayat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.Admin.pengaduan.index', [
            'pengaduan' => PengaduanJudul::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('contents.Admin.pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responses
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'asal_provinsi' => 'required',
            'asal_kabupaten_kota' => 'required',
            'isi' => 'required'
        ]);
        $tiket = Carbon::parse(now())->format("dmY") . mt_rand(1000, 9999);
        $pengaduan_judul = PengaduanJudul::create([
            'tiket' => $tiket,
            'judul' => $request->judul,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'asal_kabupaten_kota' => $request->asal_kabupaten_kota,
            'asal_provinsi' => $request->asal_provinsi,
            'status' => '1',
            'kategori_id' => $request->kategori_id
        ]);
        PengaduanRiwayat::create([
            'pengaduan_judul_id' => $pengaduan_judul->id,
            'isi' => $request->isi,
            'who' => Auth::id() ? '1' : '0',
            'user_id' => Auth::id() ? Auth::id() : '0',
        ]);
        return redirect()->route('admin.pengaduan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(PengaduanJudul $pengaduan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PengaduanJudul  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(PengaduanJudul $pengaduan)
    {
        return view('contents.Admin.pengaduan.edit', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function get_chat(PengaduanJudul $pengaduan)
    {
        return response()->json([
            'status' => true,
            'data' => PengaduanJudul::with('pengaduan_riwayat')->where('id', $pengaduan->id)->first()
        ]);
    }

    public function chat(PengaduanJudul $pengaduan)
    {
        // dd(PengaduanJudul::with('pengaduan_riwayat')->where('id', $pengaduan->id)->first()->pengaduan_riwayat);
        return view('contents.Admin.pengaduan.chat', ['pengaduan' => $pengaduan]);
    }

    public function send(Request $request, PengaduanJudul $pengaduan)
    {
        $this->validate($request, [
            'isi' => 'required'
        ]);
        PengaduanRiwayat::create([
            'pengaduan_judul_id' => $pengaduan->id,
            'isi' => $request->isi,
            'who' => Auth::id() ? Auth::id() : '0',
            'user_id' => Auth::id() ? Auth::id() : '0',
        ]);

        return response()->json([
            'status' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PengaduanJudul  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengaduanJudul $pengaduan)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PengaduanJudul  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengaduanJudul $pengaduan)
    {
        //
    }
}
