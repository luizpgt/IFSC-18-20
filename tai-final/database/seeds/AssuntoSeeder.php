<?php

use App\AssuntoModel;
use Illuminate\Database\Seeder;

class AssuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //maximo para manter na mesma linha >> 17char
    public function run()
    {

        //--------------------------------------------------------assunto1

        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Anime & Manga',
        ]);
        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Anime/Wallpapers',
        ]);
        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Mecha',
        ]);
        AssuntoModel::create([
            'escopo_id' => '1',
            'assunto' => 'Cultura Otaku',
        ]);
        //--------------------------------------------------------assunto2

        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games Geral',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games/Multiplayer',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games/Mobile',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Retro Games',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Video Games/RPG',
        ]);
        AssuntoModel::create([
            'escopo_id' => '2',
            'assunto' => 'Games/Estratégia',
        ]);
        //--------------------------------------------------------assunto3

        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Comics & Cartoons',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Tecnologia',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Armas',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Automóveis',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Esportes',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Tradicionais',
        ]);
        AssuntoModel::create([
            'escopo_id' => '3',
            'assunto' => 'Internacional',
        ]);
        //--------------------------------------------------------assunto4

        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Papercraft',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Fotografia',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Comida',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Artwork/Crítica',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Wallpapers/Gen',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Literatura',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Música',
        ]);
        AssuntoModel::create([
            'escopo_id' => '4',
            'assunto' => 'Faça-você-mesmo',
        ]);
        //--------------------------------------------------------assunto5

        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Negócios&Finanças',
        ]);
        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Viagens',
        ]);
        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Fitness',
        ]);
        AssuntoModel::create([
            'escopo_id' => '5',
            'assunto' => 'Notícias recentes',
        ]);
    }
}
