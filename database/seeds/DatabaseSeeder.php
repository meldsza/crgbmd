<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'abcd', 'email' => 'abcd@gmail.com', 'password' => Hash::make('abcd@1234')]);
        // $this->call(UsersTableSeeder::class);
    }
}
