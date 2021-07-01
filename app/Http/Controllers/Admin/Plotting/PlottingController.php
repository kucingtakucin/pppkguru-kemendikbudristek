<?php

namespace App\Http\Controllers\Admin\Plotting;

use App\Http\Controllers\Controller;
use App\Models\MasterProvinsi;
use App\Models\RefKategoriPengaduan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlottingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(User::where('role_id', '1')->get());
        return view('contents.Admin.plotting.index', [
            'kategori' => RefKategoriPengaduan::all(),
            // 'propinsi' => DB::table('master_propinsi')->get(),
            'propinsi' => MasterProvinsi::with('user')->get(),
            'users' => User::where('role_id', '1')->get()
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
        $provinsi = MasterProvinsi::find($request->kode_wilayah);
        $provinsi->user_id = $request->user_id;
        $provinsi->save();
        return response()->json([
            'status' => false,
            'message' => 'Plotting berhasil dilakukan'
        ]);
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
