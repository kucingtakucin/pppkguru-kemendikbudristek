<?php

namespace App\Http\Controllers\User\Contact;

use App\Http\Controllers\Controller;
use App\Models\MasterKabupatenKota;
use App\Models\MasterProvinsi;
use App\Models\PengaduanJudul;
use App\Models\PengaduanRiwayat;
use App\Models\RefKategoriPengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Promise;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.Contact.index', [
            'provinsi' => MasterProvinsi::all(),
            'kabupatenkota' => MasterKabupatenKota::all(),
            'kategori' => RefKategoriPengaduan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'asal_provinsi' => 'required',
            'asal_kabupaten_kota' => 'required',
            'isi' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $tiket = Carbon::parse(now())->format("dm") . mt_rand(1000, 9999);
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
        $pengaduan_isi = PengaduanRiwayat::create([
            'pengaduan_judul_id' => $pengaduan_judul->id,
            'isi' => $request->isi,
            'who' => Auth::id() ? '1' : '0',
            'user_id' => Auth::id() ? Auth::id() : '0',
        ]);
        
        $client = new GuzzleHttp\Client();
        $response = $client->request('POST', 'https://appt.demoo.id/layanan/email/pppk_helpdesk', [
            'form_params' => [ // dalamn hal kebutuhan formasi, tersedia disekolah
                'idpesan' => $pengaduan_isi->id,
                'jenis' => 'baru', //balas
                'key' => '96acd8e3496766d4b0f004c4be8670f6' //md5('Y-m-d')
            ]
        ]);

        return response()->json([
            'success' => 'Pengaduan berhasil disimpan',
            'tiket' => $tiket
        ]);
    }

    public function get_kota_by_provinsi($id)
    {
        if (!is_null($id)) {
            return response()->json([
                'status' => true,
                'data' => MasterKabupatenKota::where('mst_kode_wilayah', $id)->get()]);
        }
        return response()->json(MasterKabupatenKota::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
