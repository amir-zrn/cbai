<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'Administrator']);
        $permission = Permission::create(['name' => 'access dashboard']);
        $permission->assignRole($adminRole);

        $adminUser = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('SecurePassword')
        ]);
        $adminUser->assignRole('Administrator');
    }
}
