<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Erstellt Admin + 10 User
        $faker = \Faker\Factory::create();
        $password = Hash::make('teuzit');

        App\User::create([
            'name' => 'Admin',
            'email' => 'marc@teuz.de',
            'password' => $password,
        ]);

        factory(App\User::class, 10)->create();
    }
}
