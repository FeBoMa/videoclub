<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanyTableSeeder::class);
        $this->call(LocalTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(RolTableSeeder::class);
        //$this->call(UsersmoviesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SalaTableSeeder::class);
    }

    
}
