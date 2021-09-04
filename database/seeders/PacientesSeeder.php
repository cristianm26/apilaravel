<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pacientes')->insert([
            [
                'nombres'=> 'Cristian Antonio',
                'apellidos'=> 'Muñoz Muñoz',
                'edad'=> 28,
                'sexo'=> 'Masculino',
                'dni'=> '0603930595',
                'tipo_sangre'=> 'A+',
                'telefono'=> 1960834246,
                'correo'=> 'cris@gmail.com',
                'direccion'=> 'Los Alamos'
            ],
            [
                'nombres'=> 'Paola Andrea',
                'apellidos'=> 'Muñoz Muñoz',
                'edad'=> 29,
                'sexo'=> 'Femenino',
                'dni'=> '0603930594',
                'tipo_sangre'=> 'A+',
                'telefono'=> 1960834245,
                'correo'=> 'pao@gmail.com',
                'direccion'=> 'Los Alamos'
            ],
            [
                'nombres'=> 'Dario Javier ',
                'apellidos'=> 'Muñoz Muñoz',
                'edad'=> 27,
                'sexo'=> 'Masculino',
                'dni'=> '0603930597',
                'tipo_sangre'=> 'A+',
                'telefono'=> 1960834243,
                'correo'=> 'dario@gmail.com',
                'direccion'=> 'Los Alamos'
            ],
            [
                'nombres'=> 'Hugo Bolivar',
                'apellidos'=> 'Muñoz Muñoz',
                'edad'=> 36,
                'sexo'=> 'Masculino',
                'dni'=> '0603930599',
                'tipo_sangre'=> 'A+',
                'telefono'=> 1960834241,
                'correo'=> 'hugo@gmail.com',
                'direccion'=> 'Los Alamos'
            ]
            ]);
    }
    
}
