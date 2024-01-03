<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; //import the Hash class
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
        $user->password = Hash::make('1234');
        $user->email = 'admin@example.com';
        $user->name = 'Admin';
        $user->role = User::ROLE_ADMIN; //add the role
        $user->save();

        $user = new User();
        $user->password = Hash::make('1234');
        $user->email = 'manager@example.com';
        $user->name = 'Manager';
        $user->role = User::ROLE_MANAGER; //add the role
        $user->save();

        $user = new User();
        $user->password = Hash::make('1234');
        $user->email = 'user@example.com';
        $user->name = 'User';
        $user->role = User::ROLE_USER; //add the role
        $user->save();

        // \App\Models\User::factory(10)->create();
        $this->call(CompaniesTableSeeder::class);
        $this->call(AnimationsTableSeeder::class);

    }
}
