<?php

namespace App\Http\Controllers\Admin\Pengaduan;

use App\Http\Controllers\Controller;
use App\Models\PengaduanJudul;
use App\Models\PengaduanRiwayat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Promise;

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
            'pengaduan' => PengaduanJudul::orderBy('created_at', 'DESC')->get()
        ]);
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

    public function close_chat(PengaduanJudul $pengaduan)
    {
        PengaduanJudul::where('id', $pengaduan->id)->update([
            'status' => '0'
        ]);
        return redirect()->route('admin.pengaduan.chat', $pengaduan);
    }

    public function send(Request $request, PengaduanJudul $pengaduan)
    {
        $this->validate($request, [
            'isi' => 'required'
        ]);
        $pengaduan_isi = PengaduanRiwayat::create([
            'pengaduan_judul_id' => $pengaduan->id,
            'isi' => $request->isi,
            'who' => '1',
            'user_id' => Auth::id() ? Auth::id() : '0',
        ]);

        $client = new GuzzleHttp\Client();
        $response = $client->request('POST', 'https://appt.demoo.id/layanan/email/pppk_helpdesk', [
            'form_params' => [
                'idpesan' => $pengaduan_isi->id,
                'jenis' => 'balas', //balas
                'key' => '96acd8e3496766d4b0f004c4be8670f6' //md5('Y-m-d')
            ]
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Pesan berhasil dikirimkan'
        ]);
        // return redirect()->route('admin.pengaduan.chat', $pengaduan);
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
