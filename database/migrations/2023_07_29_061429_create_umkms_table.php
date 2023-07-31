<?php

// database/migrations/xxxx_xx_xx_create_umkms_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->text('deskripsi');
            $table->string('gambar_umkm')->nullable();
            $table->string('gambar_produk')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umkms');
    }
}
