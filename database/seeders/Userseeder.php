<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Syawal Aprian',
            'email' => 'syawal@syawal.web.id',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
