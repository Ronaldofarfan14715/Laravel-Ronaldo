<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       /*  DB::insert('INSERT INTO professions (title) VALUES (:title)',[
            'title'=>'Desarrolador Back-end',

            
            
        ]); */

       /*  DB::table('professions')->insert([
            'title' => 'Desarrollador Back-end'
        ]);
         */

        Profession::create([
           'title' => 'Desarrollador Back-end'
           ]);

        profession::create([
            'title' => 'Desarrollador Front-end'
        ]);

        profession::create([
            'title' => 'Diseñaro Web '
        ]);

  

        
        

    }
}
