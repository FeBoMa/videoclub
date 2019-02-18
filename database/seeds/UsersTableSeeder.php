<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');        
    }

    protected function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            //'phone' => $data['phone'],     // Campo añadido
            'password' => bcrypt($data['password']),
        ]);
    }

    public function store(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password') );
        $user->save();
    }

    public function crea($nombre,$email,$pass) {
        $user = new User;
        $user->name = $nombre;
        $user->email = $email;
        $user->password = bcrypt($pass);
        $user->save();
    }

    private function seedUsers(){
        DB::table('users')->delete();
        foreach( $this->arrayUsuarios as $usuario ) {
            $p = new User;
            $p->name = $usuario['name'];
            $p->email = $usuario['email'];
            $p->password = bcrypt($usuario['password']);
            $p->rememberToken = $usuario['rememberToken'];
            $p->save();
        }
    }

    /*
    private function seedUsers(){
        DB::table('users')->delete();
        $this->crea("prueba","prueba@gmail.com","prueba");
        
        User::create(array(
        'name' => 'pruebas3',
        'email' => 'pruebas@pruebas.com',
        'password' =>'pruebas'));
        
    }
    */

    private $arrayUsuarios = array(
        array(
            'name' => 'David Otero',
            'email' => 'doter@gmail.com', 
            'password' => '1234', 
            'rememberToken' => 'asd'
        ),
        array(
            'name' => 'David Rodrigez',
            'email' => 'drodri@gmail.com', 
            'password' => '1234', 
            'rememberToken' => ''
        ),
        array(
            'name' => 'Felix Bordes',
            'email' => 'Fbord@gmail.com', 
            'password' => '1234', 
            'rememberToken' => ''
        ),
        array(
            'name' => 'Marta',
            'email' => 'Marta@gmail.com',
            'password' =>'1234',
            'rememberToken' => ''
        ),
        array(
            'name' => 'pruebas',
            'email' => 'pruebas@pruebas.com',
            'password' =>'pruebas',
            'rememberToken' => ''
        )
    );

}
