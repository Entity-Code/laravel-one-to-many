<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Task;
use App\Employee;
use App\Typology;


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

        $employees = Employee::all();
        $tasks = Task::all();

        return view('pages.typologyCreate', compact('employees', 'tasks'));        
    }

    public function store(Request $request) {
        $data = $request -> all();
        dd($data);
    }
}
