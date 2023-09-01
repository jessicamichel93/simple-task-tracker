<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    protected $tasks = [];

    public function index()
    {
        $tasks = Session::get('tasks', []);
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
        ]);

        $tasks = Session::get('tasks', []);
        $task = [
            'id' => count($tasks) + 1,
            'title' => $request->input('title'),
        ];
        $tasks[] = $task;
        Session::put('tasks', $tasks);

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    public function complete($id)
    {
        $tasks = Session::get('tasks', []);

        foreach ($tasks as &$task) {
            if ($task['id'] == $id) {
                $task['completed'] = true;
                break;
            }
        }

        Session::put('tasks', $tasks);

        return redirect()->route('tasks.index')
            ->with('success', 'Task marked as completed.');
    }

    public function destroy($id)
    {

        $tasks = Session::get('tasks', []);

        $index = array_search($id, array_column($tasks, 'id'));

        if ($index !== false) {
            array_splice($tasks, $index, 1);

            Session::put('tasks', $tasks);

            return redirect()->route('tasks.index')
                ->with('success', 'Task deleted successfully.');
        }

        Session::put('tasks', $tasks);

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully.');
    }
}
