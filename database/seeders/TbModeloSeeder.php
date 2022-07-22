<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbModeloSeeder extends Seeder
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
                'desc_modelo' => 'X1',
                'id_marca' => '1',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
            [
                'desc_modelo' => 'X2',
                'id_marca' => '2',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
        ];
        DB::table('tb_modelos')->insert($data);
    }
}
