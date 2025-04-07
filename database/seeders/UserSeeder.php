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
            'password'=>bcrypt('sanguisetcinis'),
            'telefono'=>'5571347222',
            'sueldo'=>"25000",
            'nss'=>"12312321231",
            'curp'=>"DUVA850507HDFRLX09",
            'cartilla'=>"AB121212",
            'licencia'=>"12345678",
            'rfc'=>"DUVA8505076T2",
            'estudios'=>"Universitario",
            'fecha_alta'=>"2020-01-01",
            'fecha_nacimiento'=>"1985-05-07",
            'mueblerias'=>"San salvador",
            'descripcion'=>"Soy desarrollador web",
            'profile_photo_path'=>"https://picsum.photos/300/300"
        ])->assignRole(['Admin']);
        User::create([
            'name'=>"axayacatl duran velasco",
            'email'=>"darkyletter@gmail.com",
            'password'=>bcrypt('sanguisetcinis'),
            'telefono'=>'5571347133',
            'sueldo'=>"25000",
            'nss'=>"12312321231",
            'curp'=>"DUVA850507HDFRLX09",
            'cartilla'=>"AB121212",
            'licencia'=>"12345678",
            'rfc'=>"DUVA8505076T2",
            'estudios'=>"Universitario",
            'fecha_alta'=>"2025-01-01",
            'fecha_nacimiento'=>"1985-05-07",
            'mueblerias'=>"San salvador",
            'descripcion'=>"Soy el mejor vendedor",
            'profile_photo_path'=>"https://picsum.photos/300/300"
        ])->assignRole(['Vendedor']);
    //User::factory(99)->create();
    }
}
