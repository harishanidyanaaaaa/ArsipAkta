<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = ModelsUser::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'

        ]);
        $admin->assignRole('admin');

        $staff_notaris = ModelsUser::create([
            'name' => 'staff_notaris',
            'email' => 'staff_notaris@gmail.com',
            'password' => bcrypt('staff_notaris'),
            'role' => 'staff_notaris'

        ]);
        $admin->assignRole('admin');

    }
}
