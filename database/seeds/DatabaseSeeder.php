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
        $this->truncateTables([
            'users',
            'profesions'
        ]);
        $this->call(UserSeeder::class);
        $this->call(ProfesionSeeder::class);
        
    }
    protected function truncateTables(array $table)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            foreach($table as $tabla)
            {
                DB::table($tabla)->truncate();
            }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
