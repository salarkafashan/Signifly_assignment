<?php

namespace Database\Seeders;

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
        $this->call(RoleSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ProjectManagerSeeder::class);

        // create 30 fake user
        \App\Models\User::factory(8)->create();
    }
}
