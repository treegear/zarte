<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'username'=>'admin@gmail.com',
            'password'=>bcrypt('zarte@dmin#2023'),
            'user_type'=>'admin',
            ]);
    }
}
