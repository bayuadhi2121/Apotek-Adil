<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        // Define the data to be seeded with specific 'id' values
        $kategoriData = [
            ['id' => 'KTGR-2109-0001', 'nama' => 'Obat Resep'],
            ['id' => 'KTGR-2109-0002', 'nama' => 'Obat Bebas'],
            ['id' => 'KTGR-2109-0003', 'nama' => 'Vitamin & Suplemen'],
            ['id' => 'KTGR-2109-0004', 'nama' => 'Ibu & Bayi'],
            ['id' => 'KTGR-2109-0005', 'nama' => 'Beauty & Skincare'],
            ['id' => 'KTGR-2109-0006', 'nama' => 'Peralatan Kesehatan'],
            // Add more categories as needed
        ];

        // Insert the data into the "kategoris" table
        Kategori::insert($kategoriData);
    }
}
