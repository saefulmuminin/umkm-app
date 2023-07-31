@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
        <div class="container mx-auto">
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Loop through the UMKMs from the controller and display the cards -->
                @foreach ($umkms as $umkm)
                    <div class="bg-white rounded-lg shadow-md p-3">
                        <h2 class="text-xl font-bold text-gray-800 mb-2 text-center">{{ $umkm->nama_umkm }}</h2>
                        <img class="w-full h-56 object-cover rounded-t-lg"
                            src="{{ asset('storage/' . $umkm->gambar_umkm) }}" alt="{{ $umkm->nama_umkm }} Image">

                        <div class="p-4">
                            <p class="text-gray-600">{{ $umkm->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
