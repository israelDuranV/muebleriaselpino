<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"israel duran velasco",
            'email'=>"israel_duran@outlook.com",
            'password'=>bcrypt('sanguisetcinis')
        ]);
        
    //->assignRole(['Admin']);User::factory(99)->create();
    }
}
