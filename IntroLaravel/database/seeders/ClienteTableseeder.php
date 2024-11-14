<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support;
use Illuminate\Support\Facades\DB;

class ClienteTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'Nombre'=>'Idalia ',
                'Apellido'=>'Olvera',
                'Correo'=>'idalia@gmail.com',
                'Telefono'=>'4427836555'
            ]
        ]);
    }
}