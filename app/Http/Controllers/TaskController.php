<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function GetListOfTasks($filter = "all", $arg = "")
    {
        if ($filter == "all") {
            return Task::paginate(10);
        }
        if ($filter == "completed") {
            return Task::completed()->paginate(10);
        }
        if ($filter == "uncompleted") {
            return Task::uncompleted()->paginate(10);
        }
        if ($filter == "name") {
            return Task::name($arg)->paginate(10);
        }
        return response()->json(['message' => "Something it's wrong"], 404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required'
        ]);
        $task = new Task();
        $task->fill([
            'name' => $request['name']
        ])->save();
        return response()->json(["task" => $task], 201);
    }
}
