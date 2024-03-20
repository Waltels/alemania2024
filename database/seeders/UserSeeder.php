<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $user=User::create([
                'name'=>'WALTER LAURA SOTO',
                'email'=> 'waltels2019@gmail.com',
                'password'=> bcrypt('123456789')
            ]);
            $user->roles()->attach('1');
    }
}
