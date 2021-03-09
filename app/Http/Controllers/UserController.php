<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function filter_user_by_experience($experience)
    {
        $employees = User::select('*')->where('work_experience', $experience)->get();
        $userData['data'] = $employees;
        echo json_encode($userData);
        exit;
    }

    public function add_project_to_user(Request $request)
    {
        $project_id = $request['project_id'];
        $user_id = $request['user_id'];
        $user = User::where('id', $user_id)->update(['status' => 'in Progress'],['project_id' => $project_id]);
        return 'Success';
    }

}
