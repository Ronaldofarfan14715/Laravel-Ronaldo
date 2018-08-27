<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'title' => 'Desarollor Back-end'
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarollor Front-end'
        ]);

        DB::table('professions')->insert([
            'title' => 'Diseñaro Web '
        ]);

    }
}
