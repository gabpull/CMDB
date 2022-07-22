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
                'activo' => '1',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
            [
                'desc_edificio' => 'Sede Desamparados',
                'activo' => '1',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
            [
                'desc_edificio' => 'Sede Cartago',
                'activo' => '1',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
            [
                'desc_edificio' => 'Sede Turrialba',
                'activo' => '1',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],

        ];
        DB::table('tb_edificios')->insert($data);
    }
}
