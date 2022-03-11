<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgregarRegistros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigo -> references -> codigo -> on('codigos_postales');
        $asentamiento -> references -> asentamiento -> on('codigos_postales');
        $tipo_asenta -> references -> tipo_asenta -> on('codigos_postales');
        $municipio -> references -> municipio -> on('codigos_postales');
        $estado -> references -> estado -> on('codigos_postales');
        $ciudad -> references -> ciudad -> on('codigos_postales');

        for($i=0; $i < 145655; $i++) {
            DB::table('nuevos_regiwstros')->insert([
                'cp' => $codigo,
                'asentamiento' => $asentamiento,
                'tipo_asenta' => $tipo_asenta,
                'municipio' => $municipio,
                'estado' => $estado,
                'ciudad' => $ciudad,
            ]);
        }
    }
}
