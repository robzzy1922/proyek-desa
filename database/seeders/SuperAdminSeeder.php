<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'username' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('superadmin123')
        ]);

        //buat role
        $role = Role::firstOrCreate(['name' => 'super_admin']);
        //assign role ke user
        $superAdmin->assignRole($role);
    }
}
