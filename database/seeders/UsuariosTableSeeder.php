<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()//: void
    {
        $ahora= Carbon::now()->format('Y-m-d H:i:s');
        $usuario= User::create([
        'name'=>'admin'
        ,'email'=>'admin@gmail.com'
        ,'email_verified_at'=>null
        ,'remember_token'=>null
        ,'created_at'=>$ahora
        ,'updated_at'=>$ahora

        ]);
        $usuario->assignRole('Administrador');
    }
}
