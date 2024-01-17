<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         user::create([

        'name' => 'Manager',
        'user_name' => '@12Manger',
        'email' => 'vocal_manager@gmail.com',
        'password' => bcrypt('password'),
        'role' => '1',

       ]
    
    
    ); 
    }
}
