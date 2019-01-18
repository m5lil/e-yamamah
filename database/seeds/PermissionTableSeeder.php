<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'view-merchants',
            'add-merchants',
            'edit-merchants',
            'delete-merchants',
            'ajax-merchants',
        ];

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Management']);
        Role::create(['name' => 'Accountant']);


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'staff']);
        }
    }
}
