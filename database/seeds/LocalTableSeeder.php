<?php

use Illuminate\Database\Seeder;
use App\Local;

class LocalTableSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        self::seedLocal();
        $this->command->info('Tabla local inicializada con datos!');
    }

    private function seedLocal() {
        DB::table('local')->delete();
        foreach ($this->arrayLocals as $local) {
            $p = new Local;
            $p->address = $local['address'];
            $p->telephon = $local['telephon'];
            $p->google_maps = $local['google_maps'];
            $p->save();
        }
    }

    private $arrayLocals = array(
        array(
            'address' => 'C/Federico',
            'telephon' => '935667567',
            'google_maps' => 'prueba google'
        ),
        array(
            'address' => 'C/Faraday',
            'telephon' => '935667567',
            'google_maps' => 'prueba google'
        )
    );
}
