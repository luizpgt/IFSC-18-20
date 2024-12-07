<?php

use App\User;
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
            'name' => 'admin001',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'name' => 'Luiz',
            'email' => 'luiz@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        User::create([
            'name' => 'Jackson',
            'email' => 'jackson@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        User::create([
            'name' => 'User3',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        User::create([
            'name' => 'User4',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        User::create([
            'name' => 'User5',
            'email' => 'user5@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
    }
}
