<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'email' => 'test@test.com',
            'name' => 'name_test',
            'password' => Hash::make('0000'),
        ]);
    }
}
