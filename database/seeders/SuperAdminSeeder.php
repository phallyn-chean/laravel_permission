<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating super admin user
        $superAdmin = User::create([
            'name' => 'Phallyn Super Admin',
            'email' => 'phallyn@superadmin.com',
            'password'=> Hash::make('superadmin2023!'),
        ]);
        $superAdmin->assignRole('Super Admin');

        // creating admin user
        $admin = User::create([
            'name'=> 'Phallyn Admin',
            'email'=> 'phallyn@admin.com',
            'password' => Hash::make('admin2023!'),
        ]);
        $admin->assignRole('Admin');

        // creating product manager user
        $productManager = User::create([
            'name'=> 'Phallyn Product Manager',
            'email'=> 'phallyn@productmanager.com',
            'password'=> Hash::make('productmanager2023!'),
        ]);
        $productManager->assignRole('Product Manager');
    }
}
