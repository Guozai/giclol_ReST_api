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
        $this->call([
            UsersTableSeeder::class,
            AnnouncementsTableSeeder::class,
            AboutsTableSeeder::class,
            TeamsTableSeeder::class,
            RegistrationsTableSeeder::class,
            ResultsTableSeeder::class,
        ]);
    }
}
