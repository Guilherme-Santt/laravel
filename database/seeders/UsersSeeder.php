<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'José',
            'lastname' => 'Guilherme',
            'email' => 'contato@gui.com',
            'password' => bcrypt('123'),
        ]);
    }
}
