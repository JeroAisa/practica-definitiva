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

        /*Al ejecutar migraciones y pedir los seeders, se llenan campos de manera automatica.*/
        
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 4)->create();
        factory(App\Book::class, 30)->create();

    }
}
