<!-- resources/views/umkms/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail UMKM</h1>
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $umkm->nama }}</h5>
            <p class="card-text">{{ $umkm->deskripsi }}</p>
        </div>
        <img src="{{ asset('storage/' . $umkm->gambar_umkm) }}" class="card-img-top" alt="{{ $umkm->nama }}">
    </div>
    <a href="{{ route('umkms.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
