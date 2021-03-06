<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'Project Manager']);
        Role::create(['name'=>'Back-end Developer']);
        Role::create(['name'=>'Front-end Developer']);
        Role::create(['name'=>'Digital Designer']);
        Role::create(['name'=>'Full-stack Developer']);
        Role::create(['name'=>'Photographer']);
        Role::create(['name'=>'Motion graphics designer']);
    }
}
