<?php
// app/Http/Controllers/UMKMController.php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function index()
    {
        $umkms = UMKM::all();
        return view('umkms.index', compact('umkms'));
    }

    public function create()
    {
        return view('umkms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required',
            'deskripsi' => 'required',
            'gambar_umkm' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $input = $request->all();

        // Upload gambar_umkm dan gambar_produk ke direktori storage/public/umkms
        $input['gambar_umkm'] = $request->file('gambar_umkm')->store('umkms', 'public');
        $input['gambar_produk'] = $request->file('gambar_produk')->store('umkms', 'public');

        UMKM::create($input);

        return redirect()->route('umkms.index')->with('success', 'Data UMKM berhasil ditambahkan!');
    }

    public function show(UMKM $umkm)
    {
        return view('umkms.show', compact('umkm'));
    }

    public function edit(UMKM $umkm)
    {
        return view('umkms.edit', compact('umkm'));
    }

    public function update(Request $request, UMKM $umkm)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        // Jika ada gambar_umkm baru, upload dan hapus gambar lama
        if ($request->hasFile('gambar_umkm')) {
            $input['gambar_umkm'] = $request->file('gambar_umkm')->store('umkms', 'public');
        }

        // Jika ada gambar_produk baru, upload dan hapus gambar lama
        if ($request->hasFile('gambar_produk')) {
            $input['gambar_produk'] = $request->file('gambar_produk')->store('umkms', 'public');
        }

        $umkm->update($input);

        return redirect()->route('umkms.index')->with('success', 'Data UMKM berhasil diperbarui!');
    }

    public function destroy(UMKM $umkm)
    {
        $umkm->delete();

        return redirect()->route('umkms.index')->with('success', 'Data UMKM berhasil dihapus!');
    }
}
