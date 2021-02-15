<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USUARIO
        $usuario = 'usuario';
        $crear_usuario = 'crear_usuario';
        $listar_usuario = 'listar_usuario';
        $editar_usuario = 'editar_usuario';
        $eliminar_usuario = 'eliminar_usuario';
        //ROL
        $rol = 'rol';
        $crear_rol = 'crear_rol';
        $listar_rol = 'listar_rol';
        $editar_rol = 'editar_rol';
        $eliminar_rol = 'eliminar_rol';
        //PERMISO
        $permiso = 'permiso';
        $crear_permiso = 'crear_permiso';
        $listar_permiso = 'listar_permiso';
        $editar_permiso = 'editar_permiso';
        $eliminar_permiso = 'eliminar_permiso';
        Bouncer::allow('administrador')->to([
            //USUARIO
            $usuario,
            $crear_usuario,
            $listar_usuario,
            $editar_usuario,
            $eliminar_usuario,
            //ROL
            $rol,
            $crear_rol,
            $listar_rol,
            $editar_rol,
            $eliminar_rol,
            //PERMISOS
            $permiso,
            $crear_permiso,
            $listar_permiso,
            $editar_permiso,
            $eliminar_permiso,
        ]);
        Bouncer::allow('moderador')->to([
            //USUARIO
            $usuario,
            $crear_usuario,
            $listar_usuario,
            $editar_usuario,
            $eliminar_usuario,

        ]);
        Bouncer::allow('usuario')->to([

        ]);
    }
}
