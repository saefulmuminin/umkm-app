<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // ...

    public function index()
    {
        // Ambil data UMKM dari database, misalnya dengan menggunakan model UMKM
        $umkms = UMKM::all();

        // Kirim data $umkms ke view 'dashboard.blade.php'
        return view('dashboard', compact('umkms'));
    }
}
