<?php

namespace App\Http\Controllers;

use App\Task;
use Error;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getListOfTasks($filter = "all", $arg = "")
    {
        try {
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
        } catch (Error $err) {
            return response()->json($err, 400);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'string|required'
            ]);
            $task = new Task();
            $task->fill([
                'name' => $request['name']
            ])->save();
            return response()->json(["task" => $task], 201);
        } catch (Error $err) {
            return response()->json($err, 400);
        }
    }

    public function getTask($id)
    {
        try {
            return Task::find($id);
        } catch (Error $err) {
            return response()->json($err, 400);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $request->validate([
                'name' => 'string|required'
            ]);
            $task = Task::find($id);
            $task->fill($request->all())->save();
            return response()->json(["task" => $task], 201);
        } catch (Error $err) {
            return response()->json($err, 400);
        }
    }
    public function destroy($id)
    {
        try {
            Task::destroy($id);
            return response()->json(["message" => "destroyed"], 200);
        } catch (Error $err) {
            return response()->json($err, 400);
        }
    }
}
