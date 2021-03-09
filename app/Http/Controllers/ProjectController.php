<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('Project/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Project/create_first_step');
        // $users = User::where('project_id', null)
        // ->where('id', '!=', 1)
        // ->get();
        // $project = Project::find(3);
        // return view('Project/create_secound_step', compact('users','project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          
        // Store data in database
        $data = $this->validateRequest();
        $project = Project::create($data);
  
        // select available users
        $users = User::where('project_id', null)
        ->where('id', '!=', 1)
        ->get();
        return view('Project/create_secound_step', compact('users','project'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $users = $project->users;
        return view('Project/show', compact('project','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }


    private function validateRequest(){
        return request()->validate([

            'name' => ['required','string', 'min:4', 'unique:projects'],
            'description'=> ['sometimes', 'string'],
            'dead_line'=> ['required'],
            'specific_technologies'=> ['required'],
        ]);
    }
}
