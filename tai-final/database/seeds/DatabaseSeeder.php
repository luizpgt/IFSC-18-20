<?php

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
        // $this->call(UserSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(EscopoSeeder::class);
         $this->call(AssuntoSeeder::class);
         $this->call(ThreadSeeder::class);
         $this->call(ComentarioSeeder::class);
    }
}
