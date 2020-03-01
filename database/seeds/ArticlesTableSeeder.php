<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Erstellt 50 Datensätze
        factory(App\Article::class, 50)->create();
    }
}
