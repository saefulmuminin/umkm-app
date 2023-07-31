<?php

namespace Database\Seeders;

// database/seeders/AdminSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Cimulang',
            'email' => 'Cimulang2023@gmail.com',
            'password' => Hash::make('aku123'), // Ganti 'password' dengan password yang diinginkan
            'role' => 'admin', // Tambahkan field 'role' jika Anda menggunakan role-based access control
        ]);
    }
}
