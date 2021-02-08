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
        return view('pages.typologyCreate');        
    }

    public function store(Request $request) {

        $typology = Typology::create($request -> all());

        return redirect() -> route('typology-index'); 
    }

    public function edit($id) {
        $typology = Typology::findOrFail($id);
        return view('pages.typologyEdit', compact('typology'));
    }

    
    public function update(Request $request, $id) {
        $typology = Typology::findOrFail($id);
        $typology -> update($request -> all());
     
        return redirect() -> route('typology-index');
    }

    public function delete($id) {
        $typology = Typology::findOrFail($id);
        $typology -> delete();

        return redirect() -> route('typology-index');
    }
    
}
