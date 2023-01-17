<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Hidems',
            'password' => bcrypt('admin123'),
            'email' => 'admin@gmail.com'
        ]);
        $admin->assignRole('Admin');

        $pemilik = User::create([
            'name' => 'Pengelola Hidems',
            'password' => bcrypt('pengelola123'),
            'email' => 'pengelola@gmail.com'
        ]);
        $pemilik->assignRole('Pengelola');

        $pengunjung = User::create([
            'name' => 'Pengunjung Hidems',
            'password' => bcrypt('pengunjung123'),
            'email' => 'pengunjung@gmail.com'
        ]);
        $pengunjung->assignRole('Pengunjung');
    }
}
