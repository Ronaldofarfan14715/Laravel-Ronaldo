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
        // $this->call(UsersTableSeeder::class);

        $this->vaciarTablas(['users','professions']);

        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
    }

    

        protected function vaciarTablas(array $tables){

            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

            foreach ($tables as $table) {
                DB::table($table)->truncate();
            }

            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
            
        }
}
