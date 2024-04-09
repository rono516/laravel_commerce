<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view products']);
        Permission::create(['name' => 'add products']);
        Permission::create(['name' => 'edit products']);
        Permission::create(['name' => 'delete products']);
        Permission::create(['name' => 'manage orders']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage trucks']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('view products');

        $role2 = Role::create(['name' => 'trader']);
        $role2->givePermissionTo('view products');
        $role2->givePermissionTo('add products');
        $role2->givePermissionTo('edit products');
        $role2->givePermissionTo('delete products');
        $role2->givePermissionTo('manage orders');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = User::factory()->create([
            'name' => 'Example Trader User',
            'email' => 'trader@example.com',
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role3);
    }
}