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
            $p->companyName = $company['companyName'];
            $p->save();
        }
    }

    private $arrayCompanies = array(
        array(
            'fundation' => '1980',
            'president' => 'John Mayers',
            'companyName' => 'Touchstone',
            'poster' => 'https://i.ytimg.com/vi/o5d_7obRIyk/maxresdefault.jpg'
        ),
        array(
            'fundation' => '1912',
            'president' => 'Jim Gianopulos',
            'companyName' => 'Paramount Pictures',
            'poster' => 'https://upload.wikimedia.org/wikipedia/commons/7/77/Paramount_logo_1914.jpg'
        ),
        array(
            'fundation' => '1900',
            'president' => 'Arnold Schuacheneger',
            'companyName' => '20 Century Fox',
            'poster' => 'http://writing.upenn.edu/realarts/images/20th_century_fox.jpg'
        )
    );

}
