<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)
        ->get();
        return view('User/index', compact('users'));
    }

    public function show(User $user)
    {
        return view('User/show', compact('user'));
    }

    // select User by Experience according to project tech stack
    public function filter_user_by_experience(Request $request)
    {
        $project_id = $request['project_id'];
        $experience = $request['experience'];
        $result['data'] = $this->suggest_user($project_id , $experience);

        $result = json_encode($result);
        return $result;
    }


    public function suggest_user($project_id , $experience)
    {
        $project = Project::find($project_id);
        $user_result = [];

        // get all users
        $users =User::select('*')
        ->where('project_id',null)
        ->Where('work_experience', $experience)->get();
        $techs = $project->specific_technologies;
        
        foreach($techs as $tech)
        {
            foreach($users as $user)
            {
                if(!strcmp($user->skills, $tech))
                {
                     array_push($user_result,$user); 
                }
            }
        }
        return $user_result; 
    }

    // update user project_id (Ajax)
    public function add_project_to_user(Request $request)
    {
        $project_id = $request['project_id'];
        $user_id = $request['user_id'];
        $user = User::where('id', $user_id)->update(['project_id' => $project_id]);
        return "Success";
    }

}
