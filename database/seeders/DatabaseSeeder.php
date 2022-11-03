<?php

namespace Database\Seeders;

use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = Dokumen::factory(99)->create();
        $this->call([
            // UserSeeder::class,
            // KategoriSeeder::class,
            // DokumenSeeder::class,
            // BookmarkSeeder::class,
            // PeminjamanSeeder::class,
        ]);
    }
}
