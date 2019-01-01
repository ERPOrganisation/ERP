<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $liste=['college','lycée','formation','faculté','école'];
        for($i=0;$i<5;$i++){
            DB::table('Categorys')->insert([
                'name' => $liste[$i],
            ]);
        }
    }
}
