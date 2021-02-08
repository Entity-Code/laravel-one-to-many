<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
use App\Typology;

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
        $typologies = Typology::all();
        return view('pages.taskCreate', compact('employees', 'typologies'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        //valorizzo la relazione many to many
        $employee = Employee::findOrFail($data['employee_id']);
        $newTask = Task::make($request -> all());
        $newTask -> employee() -> associate($employee);

        //salvo in db
        $newTask -> save();

                                    //array dalla checkbox
        $typs = Typology::findOrFail($data['typologies']);
        $newTask -> typologies() -> attach($typs); 

        //dd($newTask); 

        return redirect() -> route('tasks-index'); 
    }

    //edit
    public function edit($id) {
        
        $employees = Employee::all(); 
        $typologies = Typology::all();

        $task = Task::findOrFail($id);
        return view('pages.taskEdit', 
        compact('task', 'employees', 'typologies'));
    }

    public function update(Request $request, $id) {
        
        $data = $request -> all();
        //dd($data);

        $employee = Employee::findOrFail($data['employee_id']);
        $newTask = Task::findOrFail($id);
        $newTask -> update($data);
        $newTask -> employee() -> associate($employee);
        $newTask -> save();


        $typs = Typology::findOrFail($data['typologies']);
        $newTask -> typologies() -> sync($typs); //attach adda solo, sync invece è anche in grado di rimuovere le linee che collegano il task preso in esame con le tipologie non prese in esame dall'array passato         
        
        return redirect() -> route('tasks-index'); 
    }
    
}  
 