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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
        ]);
        $pengaduan_isi = PengaduanRiwayat::create([
            'pengaduan_judul_id' => $pengaduan_judul->id,
            'isi' => $request->isi,
            'who' => '0',
            'user_id' =>'0',
        ]);
        
        $client = new GuzzleHttp\Client();
        $response = $client->request('POST', 'https://appt.demoo.id/layanan/email/pppk_helpdesk', [
            'form_params' => [ // dalamn hal kebutuhan formasi, tersedia disekolah
                'idpesan' => $pengaduan_isi->id,
                'jenis' => 'baru', //balas
                'hash' => md5($pengaduan_judul->tiket),
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

    public function get_chat(PengaduanJudul $pengaduan)
    {
        return response()->json([
            'status' => true,
            'data' => PengaduanJudul::with('pengaduan_riwayat')->where('id', $pengaduan->id)->first()
        ]);
    }

    public function send(Request $request, PengaduanJudul $pengaduan)
    {
        $this->validate($request, [
            'isi' => 'required'
        ]);
        $pengaduan_isi = PengaduanRiwayat::create([
            'pengaduan_judul_id' => $pengaduan->id,
            'isi' => $request->isi,
            'who' => '0',
            'user_id' => '0',
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Pesan berhasil dikirimkan'
        ]);
        // return redirect()->route('contact.chat', $pengaduan->tiket);
    }

    public function chat($hash)
    {
        // $result_tiket
        // $result_tiket = openssl_decrypt($hash, "AES-128-CTR", "pppkguru");
        // dd(PengaduanJudul::with('pengaduan_riwayat')->where('tiket', $result_tiket)->first());
        // $tiket=DB::table('faq')->where('tiket','=',null)->get();
        // $pengaduan = PengaduanJudul::with()
        return view('contents.Contact.chat', [
            'pengaduan' => DB::table('pengaduan_riwayat')
                ->join('pengaduan_judul', 'pengaduan_riwayat.pengaduan_judul_id', '=', 'pengaduan_judul.id')->where('tiket', '=', $hash)->select('pengaduan_riwayat.*', 'pengaduan_judul.nama', 'pengaduan_judul.tiket')->get(),
            'pengaduan_id' => PengaduanJudul::where('tiket', $hash)->first(),
        ]);
    }

    public function close_chat($hash)
    {
        PengaduanJudul::where('tiket', $hash)->update([
            'status' =>'0'
        ]);
        return redirect()->route('contact.chat', $hash);
    }
}
