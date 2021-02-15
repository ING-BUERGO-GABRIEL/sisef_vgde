<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);
        $moderador = User::create([
            'name' => 'Moderador',
            'email' => 'moderador@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $usuario = User::create([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $administrador->assign('administrador');
        $moderador->assign('moderador');
        $usuario->assign('usuario');
    }
}
