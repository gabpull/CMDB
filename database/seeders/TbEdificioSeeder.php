<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbEdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'desc_edificio' => 'Oficinas Centrales',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_edificio' => 'Sede Desamparados',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_edificio' => 'Sede Cartago',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_edificio' => 'Sede Turrialba',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],

        ];
        DB::table('tb_edificios')->insert($data);
    }
}
