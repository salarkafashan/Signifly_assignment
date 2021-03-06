<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class ProjectManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'Manager',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
