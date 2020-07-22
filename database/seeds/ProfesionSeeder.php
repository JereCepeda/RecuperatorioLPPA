<?php
use Illuminate\Database\Seeder;
use App\Profesion;
class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesion::create(['title'=>'Desarrollador back-end']);
        Profesion::create(['title'=>'Desarrollador front-end']);
        Profesion::create(['title'=>'Administrador DB']);
        Profesion::create(['title'=>'Marketing Digital']);
       // factory(Profesion::class,10)->create();
    }
}
