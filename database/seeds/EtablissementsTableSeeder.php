<?php

use Illuminate\Database\Seeder;

class EtablissementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Etablissement::class,50)->create();
    }
}
