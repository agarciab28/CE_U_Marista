<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(personasSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(carrerasSeeder::class);
        $this->call(alumnoSeeder::class);
    }
}
