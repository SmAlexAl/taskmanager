<?php

namespace App\Http\Controllers\Project;

use App\Http\Requests\ProjectRequest;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function create(ProjectRequest $request)
    {
        Project::create($request->all());

        return redirect('/projects');

    }
//
//    public function delete($project_id){
//        $project = Project::find($project_id);
//        $project->delete();
//
//        return redirect('/view/projects');
//    }
//
    public function views(){
        $projects = Project::all();

        return view('project.viewProjects',['projects' => $projects]);

    }

    public function view($project_id){
        $project = Project::find($project_id);

        return view('project.viewProject',['project' => $project]);

    }
//
//    public function viewProject($project_id){
//        $project = Project::find($project_id);
//
//        return view('project.viewProject',['project' => $project]);
//
//    }


    public function edit($id){
        $project = Project::find($id);

        $arr_user = [];

        foreach (User::all() as $user){
            $arr_user[$user->id] = $user->name;
        }

        return view('project.editProject',['project' => $project, 'users' => $arr_user]);

    }

    public function show(){

        $arr_user = [];
        foreach (User::all() as $user){
            $arr_user[$user->id] = $user->name;
        }

        return view('project.addProject', ['users' => $arr_user]);

    }
}
