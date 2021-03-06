<?php
use App\User;
use App\Profesion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Arfeli Alejandro',
            'email'=> 'peladoboton@hotmail.com',
            'password'=> bcrypt('123456'),
        ]);
        User::create([
            'name'=> 'Tomas Rebot',
            'email'=> 'tomasitorebot@hotmail.com',
            'password'=> bcrypt('123456'),
        ]);
        User::create([
            'name'=> 'Jeremias Cepeda',
            'email'=> 'cepedajeremias@hotmail.com',
            'password'=> bcrypt('123456'),
        ]);
        User::create([
            'name'=> 'Yoli layolanda',
            'email'=> 'yolilayolandaylayeniferdeyofre@hotmail.com',
            'password'=> bcrypt('123456'),
        ]);
        //factory(User::class,10)->create();
    }
}
