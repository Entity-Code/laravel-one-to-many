<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Task;
use App\Employee;
use App\Typology;
use Illuminate\Support\Facades\Validator;

class TypologyController extends Controller
{
    public function index() {
        $typologies = Typology::all(); 
        return view('pages.typologiesHome', compact('typologies'));
    }

    public function show($id) {
        $typology = Typology::findOrFail($id);
        return view('pages.typologyShow', compact('typology')); 
    }

    public function create() {
        $tasks = Task::all();
        return view('pages.typologyCreate', compact('tasks'));        
    }

    public function store(Request $request) { 
        $data = $request -> all(); 

        //validazione update
        Validator::make($data, [
            'name' => 'required|min:5|max:15',
            'description' => 'required|min:5|max:20',
        ]) -> validate();

        //creazione nuova tipologia
        $newTypo = Typology::create($data); 
        $tasks = Task::findOrFail($data['tasks']);

        $newTypo -> tasks() -> attach($tasks);

        return redirect() -> route('typology-show', $newTypo -> id); 
    } 

    public function edit($id) {
        $tasks = Task::all();
        $typology = Typology::findOrFail($id);

        return view('pages.typologyEdit', compact('typology', 'tasks'));
    }


    public function update(Request $request, $id) { 
     
        $data = $request -> all();
        
        //validazione edit
        Validator::make($data, [
            'name' => 'required|min:5|max:15',
            'description' => 'required|min:5|max:20',
        ]) -> validate();

        $typology = Typology::findOrFail($id);
        $typology -> update($request -> all());

        if (array_key_exists('tasks', $data)) {
            $tasks = Task::findOrFail($data['tasks']);
        } else {
            $tasks = [];
        }

        $typology -> tasks() -> sync($tasks);
     
        return redirect() -> route('typology-show', $typology -> id);
    }


    public function delete($id) {
        $typology = Typology::findOrFail($id);
        $typology -> delete();

        return redirect() -> route('typology-index');
    }
    
}
