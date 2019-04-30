<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\TaskRequest;
use App\Project;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    private $status = ['0' => 'Не выполнена', '1' => 'Выполнена'];
    private $priority = ['0' => 'Низкий', '1' => 'Высокий', '2' => 'Сделать в первую очередь'];

    public function add(){
        $arr_user = [];
        $arr_projects = [];
        $main_project = !empty($_GET['project']) ? $_GET['project'] : null;
        foreach (User::all() as $user){
            $arr_user[$user->id] = $user->name;
        }

        foreach (Project::all() as $project){
            $arr_projects[$project->id] = $project->title;
        }

        return view('task.addTask', ['users' => $arr_user, 'projects' => $arr_projects,'project' => $main_project, 'priority' => $this->priority]);
    }

    public function create(TaskRequest $request){

        //$task = Task::create($request->all());
        Auth::user()->createTask()->create($request->all());

        return redirect('/tasks');
    }


    public function update($id, TaskRequest $request)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect('/task/' . $task->id);
    }

    public function show($id){
        $task = Task::find($id);
        return view('task.viewTask',['task' => Task::find($id),'priority' => $this->priority[$task->priority]]);
    }

    public function edit($task_id){
        $task = Task::find($task_id);

        $arr_pr = [];
        $arr_user = [];

        foreach (Project::all() as $project){
            $arr_pr[$project->id] = $project->title;
        }
        foreach (User::all() as $user){
            $arr_user[$user->id] = $user->name;
        }

        return view('task.editTask',['task' => $task, 'projects' => $arr_pr, 'users' => $arr_user, 'project' => 'null','priority' => $this->priority,'status' => $this->status]);
    }

    public function views($project_id = null){
        if(empty($project_id)) {
            $tasks = Task::all();
        }
        else{
            $tasks = Task::where('project_id','=',$project_id)->get();
        }
        return view('task.viewTasks',['tasks' => $tasks,'id_project' => $project_id]);
    }

    public function delete($id){
        Task::find($id)->delete();

        return redirect('/tasks');
    }

}
