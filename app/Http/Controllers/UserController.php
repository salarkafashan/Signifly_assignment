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

}
