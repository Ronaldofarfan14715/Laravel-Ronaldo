<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //$profession =  DB::select('SELECT id FROM professions WHERE title=? ',['Desarrollador Back-end']);
        $profesion = DB::table('professions')->select('id','title')->where('title','=','Desarrollador Back-end')->first();    //->take(1)->get();
        //dd($profesion);
        //$profesion = DB::table('professions')->select('id')->get();


        //dd($profesion[1]);
        DB::table('users')->insert([

            'name' => 'Ronaldo Farfan',
            'email' => 'ronaldo@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $profesion->id,
            
            
        ]);

        DB::insert('INSERT INTO users (name,email,password,profession_id) VALUES(:name,:email,:password,:profession_id)',[
            'name' => 'Ronaldo Farfan',
            'email' => 'ronaldo2@gmail.com',
            'password'=> bcrypt('gael'),
            'profession_id'=> $profesion->id,
        ]);
    }

    
}
