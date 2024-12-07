<?php

use App\ComentarioModel;
use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComentarioModel::create([
            'thread_id' => '1',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'coment_id' => '2',
            'user_id' => '4',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'coment_id' => '2',
            'user_id' => '3',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'user_id' => '4',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '1',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);


        ComentarioModel::create([
            'thread_id' => '2',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '2',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '2',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '2',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '2',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);


        ComentarioModel::create([
            'thread_id' => '3',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '3',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '3',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '3',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '3',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);



        ComentarioModel::create([
            'thread_id' => '4',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '4',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '4',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '4',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '4',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);



        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);



        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '5',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);



        ComentarioModel::create([
            'thread_id' => '6',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '6',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '6',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '6',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '6',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);



        ComentarioModel::create([
            'thread_id' => '7',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '7',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '7',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '7',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '7',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);




        ComentarioModel::create([
            'thread_id' => '8',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '8',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '8',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '8',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '8',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);


        ComentarioModel::create([
            'thread_id' => '9',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '9',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '9',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '9',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '9',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);




        ComentarioModel::create([
            'thread_id' => '10',
            'user_id' => '3',
            'image' => 'https://www.computerhope.com/jargon/r/random-dice.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '10',
            'user_id' => '4',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '10',
            'user_id' => '5',
            'image' => 'https://pa1.narvii.com/6334/a044faebdb19573106aa9ebc703e876f973dd52e_hq.gif',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '10',
            'user_id' => '2',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4RCnki6-FU8TrDgIBqbDX4OB44NcsCFKr_w&usqp=CAU',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);
        ComentarioModel::create([
            'thread_id' => '10',
            'user_id' => '3',
            'image' => 'https://www.comboinfinito.com.br/principal/wp-content/uploads/2019/01/One-Piece.jpg',
            'comentario' => 'Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. Lorem ipsum phasellus accumsan litora, est quis. ',
        ]);


    }
}
