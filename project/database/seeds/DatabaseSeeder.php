<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;
use App\Typology;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([
            //va inserito prima l'elemento non referenziato (one)
            EmployeeSeeder::class, 
            TaskSeeder::class,
            TypologySeeder::class 
        ]);
    }
}
