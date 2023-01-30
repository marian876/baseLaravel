<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    public function run()
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'Usuario']); 
        
        Permission::create(['name'=>'admin.home','description'=>'Ver el panel de control'])->syncRoles([$role1,$role2]); 

        Permission::create(['name'=>'admin.users.index','description'=>'Ver listado de usuarios'])->syncRoles([$role1]); 
        Permission::create(['name'=>'admin.users.edit','description'=>'Editar usuarios'])->syncRoles([$role1]); 
        Permission::create(['name'=>'admin.users.update','description'=>'Actualizar usuarios'])->syncRoles([$role1]); 

        Permission::create(['name'=>'admin.categories.index','description'=>'Ver listado de categorías'])->syncRoles([$role1]); 
        Permission::create(['name'=>'admin.categories.create','description'=>'Crear categorías'])->syncRoles([$role1]); 
        Permission::create(['name'=>'admin.categories.edit','description'=>'Editar categorías'])->syncRoles([$role1]); 
        Permission::create(['name'=>'admin.categories.destroy','description'=>'Eliminar categorías'])->syncRoles([$role1]); 

        Permission::create(['name'=>'admin.logs.index','description'=>'Ver listado de ingresso'])->syncRoles([$role1]); 
        Permission::create(['name'=>'admin.logs.chart','description'=>'Ver estadísticas de ingresso'])->syncRoles([$role1,$role2]); 

    }
 
}
