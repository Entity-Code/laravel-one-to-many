<?php

use App\Task;
use App\Typology;
use Illuminate\Database\Seeder;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Typology::class, 50) 
            -> create()
            -> each(function($typology) {
            $tasks = Task::inRandomOrder()
                -> limit(rand(1,5)) -> get();
            //dd($employees);
            $typology -> tasks() -> attach($tasks); 
        });
    } 
}
