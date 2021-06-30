<?php

namespace App\Http\Controllers\Admin\RefKategoriPengaduan;

use App\Http\Controllers\Controller;
use App\Models\RefKategoriPengaduan;
use Illuminate\Http\Request;

class RefKategoriPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.Admin.ref_kategori_pengaduan.index', [
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
        return view('contents.Admin.ref_kategori_pengaduan.create');
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
            'nama' => 'required'
        ]);
        RefKategoriPengaduan::create($request->all());
        return redirect()->route('admin.ref-kategori-pengaduan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RefKategoriPengaduan  $refKategoriPengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(RefKategoriPengaduan $refKategoriPengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RefKategoriPengaduan  $refKategoriPengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(RefKategoriPengaduan $refKategoriPengaduan)
    {
        return view('contents.Admin.ref_kategori_pengaduan.edit', [
            'kategori' => $refKategoriPengaduan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RefKategoriPengaduan  $refKategoriPengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RefKategoriPengaduan $refKategoriPengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RefKategoriPengaduan  $refKategoriPengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RefKategoriPengaduan $refKategoriPengaduan)
    {
        //
    }
}
