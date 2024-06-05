<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  
        Permission::create(['name' => 'User-Index']);
        Permission::create(['name' => 'User-Store']);
        Permission::create(['name' => 'User-Update']);
        Permission::create(['name' => 'User-Delete']);
        Permission::create(['name' => 'Jenis-Akta-Index']);
        Permission::create(['name' => 'Jenis-Akta-Store']);
        Permission::create(['name' => 'Jenis-Akta-Update']);
        Permission::create(['name' => 'Jenis-Akta-Delete']);
        Permission::create(['name' => 'Jenis-Akta-Notaris']);
        Permission::create(['name' => 'Jenis-Akta-PPAT']);
        Permission::create(['name' => 'Akta-Index']);
        Permission::create(['name' => 'Akta-Store']);
        Permission::create(['name' => 'Akta-Update']);
        Permission::create(['name' => 'Akta-Delete']);

        Role::create(['name' => 'admin'])->givePermissionTo([
            'User-Index',
            'User-Store',
            'User-Update',
            'User-Delete',
            'Jenis-Akta-Index',
            'Jenis-Akta-Store',
            'Jenis-Akta-Update',
            'Jenis-Akta-Delete',
            'Jenis-Akta-Notaris',
            'Jenis-Akta-PPAT',
            'Akta-Index',
            'Akta-Store',
            'Akta-Update',
            'Akta-Delete',
        ]);

        Role::create(['name' => 'notaris'])->givePermissionTo([
            'Jenis-Akta-Index',
            'Jenis-Akta-Notaris',
            'Akta-Index',
            'Akta-Store',
            'Akta-Update',
            'Akta-Delete',
        ]);
    }
}
