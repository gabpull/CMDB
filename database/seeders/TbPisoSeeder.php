<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbPisoSeeder extends Seeder
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
                'desc_piso' => 'PB',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'M1',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'M2',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '3',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '4',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '5',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '6',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '7',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '8',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '9',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '10',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '11',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => '12',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'PE',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'Sotano',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'Azotea',
                'id_edificio' => '1',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'PB',
                'id_edificio' => '2',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],
            [
                'desc_piso' => 'PB',
                'id_edificio' => '3',
                'usuario_creacion' => 'Gabriel Alvarado Murillo',
                'usuario_modificacion' => 'Gabriel Alvarado Murillo',
                'activo' => '1',
            ],

        ];
        DB::table('tb_pisos')->insert($data);
    }
}
