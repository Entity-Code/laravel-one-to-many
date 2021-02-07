<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> foreign('employee_id', 'task-employee')
                   -> references('id')
                   -> on('employees')
                   -> onDelete('cascade');
        });

        Schema::table('employee_typology', function (Blueprint $table) {
            $table -> foreign('employee_id', 'et-employee')
                   -> references('id')
                   -> on('employees')
                   -> onDelete('cascade');
            
            
                   $table -> foreign('typology_id', 'et-typology')
                   -> references('id')
                   -> on('typologies')
                   -> onDelete('cascade');
                   
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void 
     */
    public function down()  
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> dropForeign('task-employee');               
        });

        Schema::table('employee_typology', function (Blueprint $table) {
            $table -> dropForeign('et-typology'); 
            $table -> dropForeign('et-employee'); 
        });
    }
}
