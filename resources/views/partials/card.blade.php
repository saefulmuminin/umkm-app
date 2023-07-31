<section class="py-10 bg-gray-100">
    <div class="container mx-auto">
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($umkms as $umkm)
                <div class="bg-white rounded-lg shadow-md p-3">
                    <h2 class="text-xl font-bold text-gray-800 mb-2 text-center">{{ $umkm->nama_umkm }}</h2>
                    <img class="w-full h-56 object-cover rounded-t-lg mt-4"
                        src="{{ asset('storage/' . $umkm->gambar_umkm) }}" alt="UMKM Image">

                    <div class="p-4">
                        <p class="text-gray-600">{{ $umkm->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
