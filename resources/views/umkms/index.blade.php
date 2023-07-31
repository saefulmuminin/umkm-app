@extends('layouts.app')

@section('content')
    <h1>Daftar UMKM</h1>
    <a href="{{ route('umkms.create') }}" class="btn btn-primary mb-2">Tambah UMKM</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Gambar UMKM</th>
                <th>Gambar Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($umkms as $umkm)
                <tr>
                    <td>{{ $umkm->nama_umkm }}</td>
                    <td>{{ $umkm->deskripsi }}</td>
                    <td><img src="{{ asset('storage/' . $umkm->gambar_umkm) }}" alt="{{ $umkm->nama_umkm }}" width="100">
                    </td>
                    <td><img src="{{ asset('storage/' . $umkm->gambar_produk) }}" alt="{{ $umkm->nama_umkm }}" width="100">
                    </td>
                    <td>
                        <a href="{{ route('umkms.show', $umkm) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('umkms.edit', $umkm) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('umkms.destroy', $umkm) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
