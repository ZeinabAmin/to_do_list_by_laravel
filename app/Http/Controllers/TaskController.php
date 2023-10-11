<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function notDoneList()
    {
        $tasks = Task::where('status', '=', 'not done')->get();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function done($id)
    {
        $task = Task::findorfail($id);
        $task->status = 'done';
        $task->save();
        return redirect(url('/'));
    }
    public function doneList()
    {
        $tasks = Task::where('status', '=', 'done')->get();
        return view('tasks.done-list', [
            'tasks' => $tasks
        ]);
    }
    public function addForm()
    {
        return view('tasks.add-task');
    }
    public function addTask(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'estimated_hours' => 'required|int|min:1|max:10',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'estimated_hours' => $request->estimated_hours,
        ]);
        return redirect(url('/'));
    }
    public function editForm($id)
    {
        $task = task::findorfail($id);
        return view('tasks.edit-task', [
            'task' => $task
        ]);
    }
    public function editTask($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'estimated_hours' => 'required|int|min:1|max:10',
        ]);

        $task = Task::findorfail($id);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'estimated_hours' => $request->estimated_hours,
        ]);
        // return view('tasks.index');
        return redirect(url('/'));
    }
    public function delete($id)
    {
        $task = Task::findorfail($id);
        $task->delete();
        return redirect(url('/'));
    }
    public function clearDoneList()
    {
        $tasks = task::where('status', '=', 'done');
        $tasks->delete();
        return redirect(url('/'));
    }
}
