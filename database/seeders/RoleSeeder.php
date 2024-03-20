<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role=Role::create(['name'=>'Director/a',]);
       $role->permissions()->attach([1,2,3,4,5,6]);
       $role=Role::create(['name'=>'Profesor/a',]);
       $role->syncPermissions(['Profesor','Subir archivos','Leer archivos','Editar archivos','Eliminar archivos',]);
    }
}
