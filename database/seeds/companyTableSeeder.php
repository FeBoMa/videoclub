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
        array(//1
            'fundation' => '1980',
            'president' => 'John Mayers',
            'companyName' => 'Touchstone',
            'poster' => 'https://i.ytimg.com/vi/o5d_7obRIyk/maxresdefault.jpg'
        ),
        array(//2
            'fundation' => '1912',
            'president' => 'Jim Gianopulos',
            'companyName' => 'Paramount Pictures',
            'poster' => 'https://upload.wikimedia.org/wikipedia/commons/7/77/Paramount_logo_1914.jpg'
        ),
        array(//3
            'fundation' => '1900',
            'president' => 'Arnold Schuacheneger',
            'companyName' => '20 Century Fox',
            'poster' => 'http://writing.upenn.edu/realarts/images/20th_century_fox.jpg'
        ),
        array(//4
            'fundation' => '1912',
            'president' => 'Carl Laemmle',
            'companyName' => 'Universal Studios',
            'poster' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.cinepapaya.com%2Fstat%2Fimg%2Fstatic-cp%2Fcine%2Fnewsstory%2Funiversal-studios-quiere-a-mas-compositoras-en-sus-peliculas-main-1521143795.jpg&imgrefurl=https%3A%2F%2Fwww.fandango.lat%2Fpe%2Fnoticias%2Funiversal-compositoras-inclusion-diversidad-feminismo-34036&docid=x-_PRtT__qMj9M&tbnid=Ke0Qn2-oyJmfQM%3A&vet=1&w=1140&h=424&safe=strict&client=firefox-b-d&bih=654&biw=1366&ved=0ahUKEwiZ7_3lkungAhUJyxoKHQfuDjAQ__EBCAM&iact=c&ictx=1.jpg'
        ),
        array(//5
            'fundation' => '1979',
            'president' => 'Bob Weinstein',
            'companyName' => 'MariMax',
            'poster' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fvignette.wikia.nocookie.net%2Fcreate-logopedia%2Fimages%2Fa%2Fad%2FMarimax_Films.png%2Frevision%2Flatest%3Fcb%3D20160207165931&imgrefurl=https%3A%2F%2Fcreate-logopedia.fandom.com%2Fwiki%2FMarimax_Films_(Wikipedia)&docid=lBnIeOEyWqDm8M&tbnid=KPyqmOwdYlsNIM%3A&vet=10ahUKEwjxw8vbk-ngAhUBxYUKHR18D9sQMwg5KAAwAA..i&w=996&h=248&safe=strict&client=firefox-b-d&bih=654&biw=1366&q=Marimax&ved=0ahUKEwjxw8vbk-ngAhUBxYUKHR18D9sQMwg5KAAwAA&iact=mrc&uact=8.jpg'
        ),
        array(//6
            'fundation' => '1923',
            'president' => 'Albert Warner',
            'companyName' => 'Warner Bros',
            'poster' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic1.squarespace.com%2Fstatic%2F51b3dc8ee4b051b96ceb10de%2Ft%2F5bbe40d2e4966b219bed7e64%2F1539195093369%2F%3Fformat%3D2500w&imgrefurl=https%3A%2F%2Fgeektyrant.com%2Fnews%2Fnow-warner-bros-is-launching-a-streaming-service&docid=WywXbFStQghb5M&tbnid=438rbdcxgxydPM%3A&vet=10ahUKEwi2vv2hlOngAhVCxoUKHUXYAmEQMwg5KAMwAw..i&w=1920&h=1080&safe=strict&client=firefox-b-d&bih=654&biw=1366&q=warner%20bros&ved=0ahUKEwi2vv2hlOngAhVCxoUKHUXYAmEQMwg5KAMwAw&iact=mrc&uact=8.jpg'
        ),
        array(//7
            'fundation' => '1967',
            'president' => 'Robert Shaye',
            'companyName' => 'New Line Film Productions Inc',
            'poster' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/New_Line_Cinema.gif'
        ),
        array(//8
            'fundation' => '---',
            'president' => '---',
            'companyName' => 'InterCom',
            'poster' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.selikoff.net%2Fblog-files%2Fnull-value.gif&imgrefurl=https%3A%2F%2Fwww.selikoff.net%2F2009%2F04%2F16%2Fthe-joy-of-null-continued%2F&docid=ufknDfOUO6JXwM&tbnid=k1EMDfk3te3ShM%3A&vet=10ahUKEwiEqu_cmengAhUOxYUKHQT3A0gQMwhAKAMwAw..i&w=230&h=232&safe=strict&client=firefox-b-d&bih=654&biw=1366&q=null&ved=0ahUKEwiEqu_cmengAhUOxYUKHQT3A0gQMwhAKAMwAw&iact=mrc&uact=8.jpg'
        ),
        array(//9
            'fundation' => '1999',
            'president' => 'William J. Bernstein',
            'companyName' => 'Orion Pictures Corporation',
            'poster' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Orionpictures-logo.svg/2000px-Orionpictures-logo.svg.png'
        ),
        array(//10
            'fundation' => '1919',
            'president' => 'William J. Bernstein',
            'companyName' => 'Columbia Pictures',
            'poster' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Orionpictures-logo.svg/2000px-Orionpictures-logo.svg.png'
        ),
        array(//11
            'fundation' => '1935',
            'president' => 'Joseph M. Schenck',
            'companyName' => 'Twentieth Century Fox Film Corporation',
            'poster' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.foxmovies.com%2Fimages%2Fshare_logo.jpg&imgrefurl=https%3A%2F%2Fwww.foxmovies.com%2Fabout&docid=0hCcjbVVL7nVcM&tbnid=Q2gH3Zlv73QzrM%3A&vet=10ahUKEwiwqPCmnengAhVF1BoKHYLtC-sQMwg6KAEwAQ..i&w=1200&h=630&safe=strict&client=firefox-b-d&bih=654&biw=1366&q=Twentieth%20Century%20Fox%20Film%20Corporation&ved=0ahUKEwiwqPCmnengAhVF1BoKHYLtC-sQMwg6KAEwAQ&iact=mrc&uact=8.jpg'
        )

    );

}
