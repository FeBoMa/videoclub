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
        $this->call(companyTableSeeder::class);
        $this->call(localTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(rolTableSeeder::class);
        $this->call(usersmoviesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(salaTableSeeder::class);
    }

    
}
