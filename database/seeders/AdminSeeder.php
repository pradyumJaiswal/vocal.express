<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         user::create([
        'name' => 'Admin',
        'user_name' => '@12admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password'),
        'role' => 'admin',
       ]); 
    }
}
