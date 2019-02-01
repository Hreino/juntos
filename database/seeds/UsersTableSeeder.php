<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Administrador',
            'email'=>'administrador@proyectojuntos.com',
            'company'=>'Empresa A',
            'password'=>Hash::make('123456'),
            'role'=>0 //Administrador
        ]);

       
    }
}
