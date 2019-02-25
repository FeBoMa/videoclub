<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        self::seedCompany();
        $this->command->info('Tabla company inicializada con datos!');
    }

    private function seedCompany() {
        DB::table('company')->delete();
        foreach ($this->arrayCompanies as $company) {
            $p = new Company;
            $p->fundation = $company['fundation'];
            $p->president = $company['president'];
            $p->poster = $company['poster'];
            $p->save();
        }
    }

    private $arrayCompanies = array(
        array(
            'fundation' => '1980',
            'president' => 'John Mayers',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg'
        ),
        array(
            'fundation' => '1900',
            'president' => 'Arnold Schuacheneger',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg'
        )
    );

}
