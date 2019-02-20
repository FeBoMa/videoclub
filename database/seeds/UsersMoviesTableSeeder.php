<?php

use Illuminate\Database\Seeder;

class UsersMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedCatalog();
        $this->command->info('Tabla usersmovies inicializada con datos!');
    }
    
    private function seedCatalog(){
        DB::table('usersmovies')->delete();
        foreach( $this->arrayusersmovies as $usersmovies ) {
            $p = new usersmovies;
            $p->id_movies = $usersmovies['id_movies'];
            $p->id_users = $usersmovies['id_users'];
            $p->rented = $usersmovies['director'];
            $p->save();
        }
    }

    private $arrayusersmovies = array(
		array(
			'id_movies' => '1',
			'id_users' => '1', 
			'rented' => true, 
                ),
		array(
			'id_movies' => '1',
			'id_users' => '2', 
			'rented' => true, 
                ),
                array(
			'id_movies' => '1',
			'id_users' => '3', 
			'rented' => true, 
                ),
                
                
                array(
			'id_movies' => '2',
			'id_users' => '1', 
			'rented' => true, 
                ),
		array(
			'id_movies' => '2',
			'id_users' => '2', 
			'rented' => true, 
                ),
                array(
			'id_movies' => '2',
			'id_users' => '3', 
			'rented' => true, 
                ),
                
        
                array(
			'id_movies' => '3',
			'id_users' => '1', 
			'rented' => true, 
                ),
		array(
			'id_movies' => '3',
			'id_users' => '3', 
			'rented' => true, 
                ),
                array(
			'id_movies' => '3',
			'id_users' => '4', 
			'rented' => true, 
                )
	);
}