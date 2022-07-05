<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Bonjour L. De Guzman',
            'email' => 'bonjourdeguzman@gmail.com',
            'status' => 1,
            'password' => Hash::make('password')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Agent']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);
        $role2->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
