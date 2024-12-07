<?php

use App\EscopoModel;
use Illuminate\Database\Seeder;

class EscopoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EscopoModel::create([
            'escopo' => 'Cultura Japonesa',
        ]);
        EscopoModel::create([
            'escopo' => 'Video Games',
        ]);
        EscopoModel::create([
            'escopo' => 'Interesses',
        ]);
        EscopoModel::create([
            'escopo' => 'Criativo',
        ]);
        EscopoModel::create([
            'escopo' => 'Outros',
        ]);
    }
}
