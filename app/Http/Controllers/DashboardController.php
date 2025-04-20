<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Vape;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $vape = Vape::count();

        return view('dashboard.dashboard', [
            'vape' => $vape,
        ]);
    }
}
