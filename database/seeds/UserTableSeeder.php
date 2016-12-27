<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array('id' => '1', 'name' => 'Laurens', 'foto' => 'default.png', 'email' => 'test' . '@test.com', 'password' => '$2y$10$bRsD96BYEgyv1Dn1scV1xuTfIq4ICIda7FYU0c3QghazXN4FNRk8G', 'remember_token' => str_random(10)),
        ));
    }
}