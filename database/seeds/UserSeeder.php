<?php
use App\User;
use App\profession;
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
        //$profesion = DB::table('professions')->select('id','title')->where('title','=','Desarrollador Back-end')->first();    //->take(1)->get();
        //dd($profesion);
        //$profesion = DB::table('professions')->select('id')->get();
        $professionId = Profession::where('title','Desarrollador Back-end')->value('id');

        


        User::create([
            'name' => 'Ronaldo Farfan',
            'email' => 'ronaldo@gmail.com',
            'password' => bcrypt('hola'),
            'profession_id' => $professionId

        ]);

    

       

        /* DB::insert('INSERT INTO users (name,email,password,profession_id) VALUES(:name,:email,:password,:profession_id)',[
            'name' => 'Ronaldo Farfan',
            'email' => 'ronaldo2@gmail.com',
            'password'=> bcrypt('gael'),
            'profession_id'=> $profesion->id,
        ]); */
    }

    
}
