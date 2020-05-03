<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@test.com';
        $user->email_verified_at = now();
        $user->password = \Illuminate\Support\Facades\Hash::make('111');
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
