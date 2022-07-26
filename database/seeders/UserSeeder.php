<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => bcrypt(123456),
            'role' => 'pegawai'
        ]);
    }
}
