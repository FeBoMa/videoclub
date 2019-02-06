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


    private function seedUsers(){
        DB::table('users')->delete();
        $this->crea("prueba","prueba@gmail.com","prueba");
        /*
        User::create(array(
        'name' => 'pruebas3',
        'email' => 'pruebas@pruebas.com',
        'password' =>'pruebas'));
        */
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

}
