<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // Panggil seeder lain yang mungkin Anda miliki di sini
            AdminSeeder::class,
        ]);
    }
}
