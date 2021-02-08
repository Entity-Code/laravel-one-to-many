<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run() 
    {
        //una specie di foreach
        factory(Task::class, 50)
            -> make() //le creo senza buttarle in tabella
            -> each(function($task){ //prendo ogni elemento con l'each
            //dd($task);
            $emp = Employee::inRandomOrder() -> first(); //salvo un elemento random employee
            $task -> employee() -> associate($emp); //associo l'employee random ad un task iesimo
            $task -> save(); //salvo nel database
        }); 
    }
}


