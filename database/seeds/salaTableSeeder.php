<?php

use Illuminate\Database\Seeder;
use App\Sala;

class SalaTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        self::seedSala();
        $this->command->info('Tabla sala inicializada con datos!');   
    }

    private function seedSala() {
        DB::table('sala')->delete();
        foreach ($this->arraySalas as $sala) {
            $p = new Sala;
            $p->capacity = $sala['capacity'];
            $p->sala_name = $sala['sala_name'];
            $p->sala_photo = $sala['sala_photo'];
            $p->id_local = $sala['id_local'];
            $p->save();
        }
    }

    private $arraySalas = array(
        array(
            'capacity' => '1980',
            'sala_name' => 'John Mayers',
            'sala_photo' => 'photoooo',
            'id_local' => 1
        ),
        array(
            'capacity' => '3',
            'sala_name' => 'Indiana Bones',
            'sala_photo' => 'photoooo',
            'id_local' => 1
        ),
        array(
            'capacity' => '1900',
            'sala_name' => 'Arnold Schuacheneger',
            'sala_photo' => 'photooo',
            'id_local' => 2
        )
    );

}
