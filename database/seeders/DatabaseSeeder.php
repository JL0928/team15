<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->password = Hash::make('0000');
        $user->email = 'admin@example.com';
        $user->name = 'Admin';
        $user->role = User::ROLE_ADMIN; // Add the role
        $user->save();

        $user = new User();
        $user->password = Hash::make('0000');
        $user->email = 'manager@example.com';
        $user->role = User::ROLE_MANAGER; // Add the role
        $user->name = 'Manager';
        $user->save();

        $user = new User();
        $user->password = Hash::make('0000');
        $user->email = 'user@example.com';
        $user->role = User::ROLE_USER; // Add the role
        $user->name = 'User';
        $user->save();

        $this->call(CompaniesTableSeeder::class);
        $this->call(AnimationsTableSeeder::class);

    }
}
