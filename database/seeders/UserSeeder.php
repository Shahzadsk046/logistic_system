<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

           // Reset cached roles and permissions
           app()[PermissionRegistrar::class]->forgetCachedPermissions();

           // create permissions
           Permission::create(['name' => 'users.list']);
           Permission::create(['name' => 'users.view']);
           Permission::create(['name' => 'users.create']);
           Permission::create(['name' => 'users.update']);
           Permission::create(['name' => 'users.delete']);
           Permission::create(['name' => 'drivers.list']);
           Permission::create(['name' => 'drivers.view']);
           Permission::create(['name' => 'drivers.create']);
           Permission::create(['name' => 'drivers.update']);
           Permission::create(['name' => 'drivers.delete']);
   
           // create roles and assign existing permissions
           $role1 = Role::create(['name' => 'admin']);
           $role1->givePermissionTo('users.list');
           $role1->givePermissionTo('users.view');
           $role1->givePermissionTo('users.create');
           $role1->givePermissionTo('users.update');
           $role1->givePermissionTo('users.delete');
           $role1->givePermissionTo('drivers.list');
           $role1->givePermissionTo('drivers.view');
           $role1->givePermissionTo('drivers.create');
           $role1->givePermissionTo('drivers.update');
           $role1->givePermissionTo('drivers.delete');
           
           $role2 = Role::create(['name' => 'dispatcher']);
           $role2->givePermissionTo('users.list');
           $role2->givePermissionTo('drivers.list');
           $role2->givePermissionTo('drivers.view');
           $role2->givePermissionTo('drivers.create');
           $role2->givePermissionTo('drivers.update');
           $role2->givePermissionTo('drivers.delete');
           
           $role3 = Role::create(['name' => 'driver']);
           $role3->givePermissionTo('drivers.list');
           // gets all permissions via Gate::before rule; see AuthServiceProvider
   
           // create demo users
           $user = \App\Models\User::factory()->create([
               'name' => 'Admin',
               'email' => 'admin@gmail.com',
               'password' => Hash::make('test3333'),
           ]);
           $user->assignRole($role1);
           
           $user = \App\Models\User::factory()->create([
                'name' => 'Dispatcher',
                'email' => 'dispatcher@gmail.com',
                'password' => Hash::make('test3333'),
            ]);
            $user->assignRole($role2);
            
            $user = \App\Models\User::factory()->create([
                'name' => 'Driver',
                'email' => 'driver@gmail.com',
                'password' => Hash::make('test3333'),
             ]);
             $user->assignRole($role3);

        // // Create Permissions
        // $user_list = Permission::create(['name' => 'users.list']);
        // $user_view = Permission::create(['name' => 'users.view']);
        // $user_create = Permission::create(['name' => 'users.create']);
        // $user_update = Permission::create(['name' => 'users.update']);
        // $user_delete = Permission::create(['name' => 'users.delete']);
        // $driver_list = Permission::create(['name' => 'drivers.list']);
        // $driver_view = Permission::create(['name' => 'drivers.view']);
        // $driver_create = Permission::create(['name' => 'drivers.create']);
        // $driver_update = Permission::create(['name' => 'drivers.update']);
        // $driver_delete = Permission::create(['name' => 'drivers.delete']);

        // // Create Roles
        // $admin_role = Role::create(['name' => 'admin']);
        // $dispatcher_role = Role::create(['name' => 'dispatcher']);
        // $driver_role = Role::create(['name' => 'driver']);

        // // Assign Permissions to Roles
        // $admin_role->givePermissionTo([
        //     $user_list,
        //     $user_view,
        //     $user_create,
        //     $user_update,
        //     $user_delete,
        //     $driver_list,
        //     $driver_view,
        //     $driver_create,
        //     $driver_update,
        //     $driver_delete,
        // ]);

        // $dispatcher_role->givePermissionTo([
        //     $user_list,
        //     $driver_list,
        //     $driver_create,
        // ]);

        // // Create Admin
        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'is_admin' => 1,
        //     'password' => Hash::make('admin123'),
        //     'phone' => '123-456-7890',
        //     'address' => 'Keamari',
        //     'city' => 'Karachi',
        //     'state' => 'Sindh',
        //     'zip_code' => '75620',
        //     'country' => 'Pakistan',
        // ]);

        // // // Assign Role to admin
        // $admin->assignRole('admin');

        // // // Create Dispatcher
        // $dispatcher = User::create([
        //     'name' => 'Dispatcher',
        //     'email' => 'dispatcher@gmail.com',
        //     'is_admin' => 0,
        //     'password' => Hash::make('test3333'),
        //     'phone' => '123-456-7890',
        //     'address' => 'Keamari',
        //     'city' => 'Karachi',
        //     'state' => 'Sindh',
        //     'zip_code' => '75620',
        //     'country' => 'Pakistan',
        // ]);

        // // Assign Role to dispatcher
        // $admin->assignRole('dispatcher');
    }
}
