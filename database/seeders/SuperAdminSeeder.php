<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Aku Dimana',
            'email' => 'superadmin@test.com',
            'password' => Hash::make('superadmin')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Dengan Siapa',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Ada Dimana',
            'email' => 'product@test.com',
            'password' => Hash::make('product')
        ]);
        $productManager->assignRole('Product Manager');

        // Creating Default User
        $user = User::create([
            'name' => 'Mau Kemana',
            'email' => 'user@test.com',
            'password' => Hash::make('user')
        ]);
        $user->assignRole('User');
    }
}
