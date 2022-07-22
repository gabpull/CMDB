<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbMarcaSeeder extends Seeder
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
                'desc_marca' => 'Epson',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
            [
                'desc_marca' => 'AOC',
                'id_usuario_creacion' => '1',
                'id_usuario_modificacion' => '1',
            ],
        ];
        DB::table('tb_marcas')->insert($data);
    }
}
