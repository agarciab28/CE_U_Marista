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
        $this->call(personalSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(carrerasSeeder::class);
        $this->call(alumnoSeeder::class);
        $this->call(PlanDeEstudiosSeeder::class);
        $this->call(MateriasSeeder::class);
        $this->call(profesoresSeeder::class);
        $this->call(coordinadoresSeeder::class);
        $this->call(GruposSeeder::class);
        $this->call(eventosSeeder::class);
        $this->call(CalificacionesSeeder::class);
        $this->call(AulasSeeder::class);
        $this->call(ConfiguracionSeeder::class);
        $this->call(kardexSeeder::class);

    }
}
