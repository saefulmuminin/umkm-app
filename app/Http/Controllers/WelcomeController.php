<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index()
    {
        $umkms = UMKM::all();
        return view('welcome', compact('umkms'));
    }
}
