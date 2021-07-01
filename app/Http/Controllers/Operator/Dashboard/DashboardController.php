<?php

namespace App\Http\Controllers\Operator\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('contents.Operator.dashboard.index');
    }
}
