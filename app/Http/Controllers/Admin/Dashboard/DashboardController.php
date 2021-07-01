<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->role_id == '1') {
            return redirect()->route('operator.dashboard');
        }
        return view('contents.Admin.dashboard.index');
    }
}
