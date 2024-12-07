<?php

use App\ThreadsModel;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        ThreadsModel::create([
            'assunto_id' => '',
            'user_id' => '',
            'title' => '',
            'image' => '',
            'desc' => '',
        ]);
        */


        ThreadsModel::create([
            'assunto_id' => '1',
            'user_id' => '2',
            'title' => 'yourwellcome',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_6oOkLdMG5_PKXLuAwF4n1FmGmh-Puuab40bRKkL46kJp4A-Aox5LxDmzkMSLkM8oIzIVBU2ZZ3D3_Eze5ehl4uZKNxtXIgI&usqp=CAU&ec=45732304',
            'desc' => 'simple description',
        ]);
        ThreadsModel::create([
            'assunto_id' => '1',
            'user_id' => '2',
            'title' => 'simpleimage',
            'image' => 'https://img.ibxk.com.br/2020/06/16/16145246087045.jpg?w=1120&h=420&mode=crop&scale=both',
            'desc' => 'simple description',
        ]);
        ThreadsModel::create([
            'assunto_id' => '4',
            'user_id' => '3',
            'title' => 'post about steins;gate',
            'image' => 'https://d2skuhm0vrry40.cloudfront.net/2020/articles/2020-01-27-11-00/medium_ezgif_6_21afab4b699d.jpg/EG11/thumbnail/750x422/format/jpg/quality/60',
            'desc' => 'aliquam tempor ac in. accumsan porta',
        ]);
        ThreadsModel::create([
            'assunto_id' => '2',
            'user_id' => '4',
            'title' => 'mad scientist',
            'image' => 'https://www.siliconera.com/wp-content/uploads/2020/01/Steins-Gate-0-Elite-Siliconera.jpg',
            'desc' => 'iquam tempor ac in. accumsan porta at sollicitudin litora ',
        ]);
        ThreadsModel::create([
            'assunto_id' => '3',
            'user_id' => '2',
            'title' => 'more steins;gate',
            'image' => 'https://cdn.myanimelist.net/images/anime/1375/93521.jpg',
            'desc' => 'litora vulputate tempus curae',
        ]);
        ThreadsModel::create([
            'assunto_id' => '5',
            'user_id' => '4',
            'title' => 'another gate',
            'image' => 'https://image.api.playstation.com/cdn/UP1004/CUSA03041_00/NRq3b3Nlv78LlGJAUJLpEyt44XZOWe48.png',
            'desc' => 'aliquam tempor ac in. accumsan porta at s, congue blandit etiam tincidunt praesent congue ',
        ]);
        ThreadsModel::create([
            'assunto_id' => '6',
            'user_id' => '5',
            'title' => 'sakurasou mashiro',
            'image' => 'https://i.pinimg.com/originals/70/dc/b1/70dcb1b6e4a6199ac0304b77b053ab69.jpg',
            'desc' => 'accumsan porta at sollicitudin litora vulputate, idunt praesent congue',
        ]);
        ThreadsModel::create([
            'assunto_id' => '27',
            'user_id' => '2',
            'title' => 'this is mayushi',
            'image' => 'https://cupulatrovao.com.br/wp-content/uploads/2020/01/Mayuri-de-Steins-Gate-1.jpg',
            'desc' => 'ongue blandit etiam tincidunt praesent congue donec blandit, et turpis ligula accumsan ornar',
        ]);
        ThreadsModel::create([
            'assunto_id' => '6',
            'user_id' => '4',
            'title' => 'is this',
            'image' => 'https://d2skuhm0vrry40.cloudfront.net/2020/articles/2020-01-27-11-00/medium_ezgif_6_21afab4b699d.jpg/EG11/thumbnail/750x422/format/jpg/quality/60',
            'desc' => 'aliquam tempor ac in. accumsan porta',
        ]);
        ThreadsModel::create([
            'assunto_id' => '5',
            'user_id' => '5',
            'title' => 'one more',
            'image' => 'https://www.siliconera.com/wp-content/uploads/2020/01/Steins-Gate-0-Elite-Siliconera.jpg',
            'desc' => 'iquam tempor ac in. accumsan porta at sollicitudin litora ',
        ]);
        ThreadsModel::create([
            'assunto_id' => '4',
            'user_id' => '3',
            'title' => 'again',
            'image' => 'https://cdn.myanimelist.net/images/anime/1375/93521.jpg',
            'desc' => 'litora vulputate tempus curae',
        ]);
    }
}
