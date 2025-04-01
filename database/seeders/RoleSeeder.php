<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin   = Role::create(['name'=>"Admin"]);
        $vendedor = Role::create(['name'=>"Vendedor"]);

        Permission::create(['name'=>'admin.home','description'=>'Ver el dashboard'])
        ->syncRoles([$admin, $vendedor]);
        Permission::create(['name'=>'admin.users.index','description'=>'Ver listado de usuarios'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.users.edit','description'=>'Asignar un rol'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.catalogos.item','description'=>'Ver opción Catálogos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.roles.index','description'=>'Ver Listado de roles'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.roles.edit','description'=>'Asignar roles'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.roles.create','description'=>'Crear roles'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.roles.destroy','description'=>'Eliminar roles'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.bancos.edit','description'=>'Editar un banco'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.bancos.create','description'=>'Agregar bancos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.bancos.destroy','description'=>'Eliminar bancos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.terminados.edit','description'=>'Editar un banco'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.terminados.create','description'=>'Agregar bancos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.terminados.destroy','description'=>'Eliminar bancos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.departamentos.edit','description'=>'Editar un departamentos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.departamentos.create','description'=>'Agregar departamentos'])
        ->syncRoles([$admin]);
        Permission::create(['name'=>'admin.departamentos.destroy','description'=>'Eliminar departamentos'])
        ->syncRoles([$admin]);
    }
}
