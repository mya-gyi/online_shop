<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',
            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',
            'admin-role-list',
            'admin-role-create',
            'admin-role-edit',
            'admin-role-delete',
            'admin-permission-list',
            'admin-permission-create',
            'admin-permission-edit',
            'admin-permission-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
