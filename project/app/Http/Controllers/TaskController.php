<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;

class TaskController extends Controller 
{   
    //index
    public function index() {
        $tasks = Task::all();
        return view('pages.tasksHome', compact('tasks'));
    }

    //show
    public function show($id) {
        $task = Task::findOrFail($id);
        return view('pages.taskShow', compact('task'));
    }

    //update
    public function create() {
        $employees = Employee::all();
        return view('pages.taskCreate', compact('employees'));
    }
    public function store(Request $request) {
        $newTask = Task::make($request -> all());
        $employee = Employee::findOrFail($request -> get('employee_id'));
        $newTask -> employee() -> associate($employee);
        $newTask -> save();

        return redirect() -> route('tasks-index');
    }

    //edit
    public function edit($id) {
        $task = Task::findOrFail($id);
        $employees = Employee::all();
        return view('pages.taskEdit', compact('task', 'employees'));
    }
    
}  
 