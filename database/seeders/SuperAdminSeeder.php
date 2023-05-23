<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name' => 'Mariana Rodríguez',
            'email' => 'admin2@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);

        /*
        ESTO SOLO SE REALIZA PARA CREAR UN ROL QUE NO EXISTE (Para arrancar)

        $rol = Role::create(['name' => 'Administrador']);
        $permisos = Permission::pluck('id', 'id')->all();
        $rol->syncPermissions($permisos);

        $usuario->assignRole([$rol->id]);

        */
        $usuario->assignRole('Administrador');

    }
}
