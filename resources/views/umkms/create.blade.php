<!-- resources/views/umkms/create.blade.php -->

@extends('layouts.simple-layout')

@section('title', 'Add UMKM')

@section('content')
    <nav class="bg-white dark:bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end space-x-4">
                <a href="{{ route('umkms.index') }}"
                    class="text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-lg text-base px-8 py-4 text-center">
                    UMKM List
                </a>
                <a href="{{ route('umkms.create') }}"
                    class="text-white bg-green-500 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-lg text-base px-8 py-4 text-center">
                    Add UMKM
                </a>
            </div>
        </div>
    </nav>

    <div class="py-10 bg-gray-100">
        <!-- Tambahkan form untuk menambahkan data UMKM -->
        <!-- ... Tambahkan form untuk menambahkan data UMKM di sini ... -->
        <form action="{{ route('umkms.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama UMKM</label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}" required>
                @error('nama')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi UMKM</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5"
                    required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="gambar_umkm">Gambar UMKM</label>
                <input type="file" name="gambar_umkm" id="gambar_umkm"
                    class="form-control @error('gambar_umkm') is-invalid @enderror" required>
                @error('gambar_umkm')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="gambar_produk">Gambar Produk</label>
                <input type="file" name="gambar_produk" id="gambar_produk"
                    class="form-control @error('gambar_produk') is-invalid @enderror" required>
                @error('gambar_produk')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
