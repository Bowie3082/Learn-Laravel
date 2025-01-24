<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new App\User();
        $user->name = 'admin';
        $user->email = 'zHs0J@example.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
