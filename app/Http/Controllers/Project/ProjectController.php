<?php

namespace App\Http\Controllers\Project;

use App\Http\Requests\ProjectRequest;
use App\Project;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Создание проекта
     *
     * @param ProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(ProjectRequest $request)
    {
        //переделать эти 2 строчки в одну
//        $project = Project::create($request->all());
        $project = Auth::user()->project()->create($request->all());
        $project->developers()->attach($request->input('developers'));
        return redirect('/projects');

    }

    /**
     * Обновление проекта
     *
     * @param Project $project
     * @param ProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($project, ProjectRequest $request)
    {
        $project->update($request->all());

        $project->developers()->sync($request->input('developers'));

        return redirect('/project/' . $project->id);
    }

    /**
     * @param Project $project_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($project){
        $project->delete();

        return redirect('/projects');
    }

    /**
     * Показывает все доступные проекты
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function views(){
        $projects = Project::all();

        return view('project.viewProjects',['projects' => $projects]);

    }

    /**
     *
     * @param $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($project){

        foreach ($project->developers as $developer){
            $name = $developer->name;
        }
        return view('project.viewProject',['project' => $project]);

    }

    /**
     * @param $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($project){
        $arr_user = [];

        foreach (User::all() as $user){
            $arr_user[$user->id] = $user->name;
        }

        return view('project.editProject',['project' => $project, 'users' => $arr_user]);

    }

    /**
     * Добавление проекта
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){

        $arr_user = [];
        foreach (User::all() as $user){
            $arr_user[$user->id] = $user->name;
        }

        return view('project.addProject', ['users' => $arr_user]);

    }
}
