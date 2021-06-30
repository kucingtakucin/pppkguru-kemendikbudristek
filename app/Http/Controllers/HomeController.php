<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['faq']=DB::table('faq')->where('deleted_at','=',null)->get();
        $data['dokumen']=DB::table('dokumen')->get();
        $data['tahapan']=DB::table('tahapan')->orderBy('ordering','asc')->get();
        return view('contents.Home.home', $data);
    }
}
