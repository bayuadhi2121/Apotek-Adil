<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the data to be seeded
        $userData = [
            // [
            //     'id' => 'USR-001',
            //     'nama' => 'Azzam',
            //     'username' => 'Azzam2023',
            //     'password' => bcrypt('azzamadmin'),
            //     'alamat' => 'lotim',
            //     'hp' => '1234567890', // Change this to an appropriate phone number
            //     'is_admin' => 1
            // ],
            [
                'id' => 'USR-001',
                'nama' => 'azzamhayaza',
                'username' => 'azzamhayaza',
                'password' => bcrypt('Kimimaki1'),
                'alamat' => 'lotim',
                'hp' => '1234567890', // Change this to an appropriate phone number
                'is_admin' => 1
            ],
            // [
            //     'id' => 'USR-002',
            //     'nama' => 'bay',
            //     'username' => 'bay',
            //     'password' => bcrypt('123'),
            //     'alamat' => 'lotim',
            //     'hp' => '1234567890', // Change this to an appropriate phone number
            //     'is_admin' => 0
            // ],

            // Add more users as needed
        ];

        // Insert the data into the "users" table
        User::insert($userData);
    }
}
