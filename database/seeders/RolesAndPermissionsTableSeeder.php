<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //reset cached roles and permission
        app()['cache']-> forget('maklad.permission.cache');
    
        //create permission
        Permission::firstOrCreate(['name'=>'usuarios.index']);
        Permission::firstOrCreate(['name'=>'usuarios.create']);
        Permission::firstOrCreate(['name'=>'usuarios.store']);
        Permission::firstOrCreate(['name'=>'usuarios.show']);
        Permission::firstOrCreate(['name'=>'usuarios.edit']);
        Permission::firstOrCreate(['name'=>'usuarios.update']);


        //create roles and assign existing permissions
        $role= Role::firstOrcreate(['name'=>'Administrador']);
        $role-> givePermissionTo(Permission::all());


        $role= Role::firstOrcreate(['name'=>'Staff']);
        $role-> givePermissionTo('usuarios.index');

    
    }
}
