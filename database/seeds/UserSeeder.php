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
        
        $profession =  DB::select('SELECT id FROM professions WHERE title="Desarrollador Back-end"');

        dd($profession);

        DB::table('users')->insert([

            'name' => 'Ronaldo Farfan',
            'email' => 'ronaldo@gmail.com',
            'password' => bcrypt('laravel'),
            
            
        ]);
    }
}
