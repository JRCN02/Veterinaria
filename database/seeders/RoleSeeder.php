<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; //Añade el modelo del los roles de spatie
use Spatie\Permission\Models\Permission; //Añade el modelo de los permisos
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Veterinario']);
        $role3 = Role::create(['name' => 'Secretaria']);
        //Nombre esta relacionado con las rutas que defini en el archivo web.php
        
        Permission::create(['name' => 'admin.dash'])->syncRoles([$role1,$role2,$role3]); //Asignmaos este permiso a ese rol
        Permission::create(['name' => 'admin.servicios'])->assignRole($role1);
        Permission::create(['name' => 'admin.horarios'])->assignRole($role1);   
        
        Permission::create(['name' => 'admin.perfiles'])->assignRole($role1); //Asigna el permiso a un solo rol
        Permission::create(['name' => 'admin.perfil'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'cambiarPass'])->syncRoles([$role1,$role2,$role3]);


    }
}
