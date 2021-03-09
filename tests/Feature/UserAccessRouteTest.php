<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
class UserAccessRouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function only_logged_in_users_access_to_projects_list()
    {   
        $response = $this->get('/projects')->assertRedirect('/login');
    }

    public function logged_in_users_access_to_projects_list()
    {   
        $response = $this->get('/projects')->assertRedirect('/projects');
    }

    public function only_logged_in_users_access_to_project_create_page()
    {   
        $response = $this->get('/projects/create')->assertRedirect('/login');
    }

    public function logged_in_users_access_to_project_create_page()
    {   
        $response = $this->get('/projects')->assertRedirect('/projects/create');
    }

    public function only_logged_in_users_access_to_project_details()
    {   
        $response = $this->get('/projects/{id}')->assertRedirect('/login');
    }

    public function logged_in_users_access_to_project_create_details()
    {   
        $response = $this->get('/projects/{id}')->assertRedirect('/projects/{id}');
    }
    public function only_logged_in_users_access_to_users_list()
    {   
        $response = $this->get('/users')->assertRedirect('/login');
    }

    public function logged_in_users_access_to_users_list()
    {   
        $response = $this->get('/users')->assertRedirect('/users');
    }
}
