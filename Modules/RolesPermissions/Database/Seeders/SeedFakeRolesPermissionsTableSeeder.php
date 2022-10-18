<?php

namespace Modules\RolesPermissions\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeedFakeRolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        // Permission List as array
        $permissions = [
            'dashboard.view',
        ];
        $user = Role::create(['name' => 'user']);
        $admin = Role::create(['name' => 'admin']);


        // Create and Assign Permissions
        //
        for ($i = 0; $i < count($permissions); $i++) {
            // Create Permission
            $permission = Permission::create(['name' => $permissions[$i]]);

        }
    }
}
