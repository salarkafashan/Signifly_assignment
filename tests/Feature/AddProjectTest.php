<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_Project_can_be_added()
    {
        $this->post('projects',[
            'name' => 'cool project',
            'description' => 'cool description',
            'specific_technologies' => '"laravel","Vue.js"',
            'dead_line' => '2021-03-10',
            'status' => 'pendding'
        ]);
        $response->assertOk();
        $this->assertCount(1, \App\Project::all());
    }

    public function test_Project_name_is_required()
    {
        $this->withoutExeptionHandling();
        

        $response = $this->post('projects',[
            'name' => '',
            'description' => 'cool description',
            'specific_technologies' => '"laravel","Vue.js"',
            'dead_line' => '2021-03-10',
            'status' => 'pendding'
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_Project_description_is_required()
    {
        $this->withoutExeptionHandling();
        

        $response = $this->post('projects',[
            'name' => 'cool name',
            'description' => '',
            'specific_technologies' => '"laravel","Vue.js"',
            'dead_line' => '2021-03-10',
            'status' => 'pendding'
        ]);

        $response->assertSessionHasErrors('description');
    }

    public function test_Project_dead_line_is_required()
    {
        $this->withoutExeptionHandling();
        

        $response = $this->post('projects',[
            'name' => 'cool name',
            'description' => '',
            'specific_technologies' => '"laravel","Vue.js"',
            'dead_line' => '2021-03-10',
            'status' => 'pendding'
        ]);

        $response->assertSessionHasErrors('dead_line');
    }
    
}
