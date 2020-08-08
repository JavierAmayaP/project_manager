<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {

            // primary key big int autoincrement unsigned
            $table->id();
            
            // define constraints in Laravel 7
            $table->foreignId('user_id') //UNSIGNED BIG INT
                ->references('id') // Specify which column this foreign ID references on another table.
                ->on('users'); //Specify the referenced table

            $table->foreignId('company_id')
                ->references('id')
                ->on('companies');

            $table->foreignId('city_id')
                ->references('id')
                ->on('cities');

            // $table->foreignId('company_id');
            // $table->foreignId('city_id');
            // $table->foreignId('user_id');

            $table->string('name', 30);
            $table->date('execution_date')->nullable(); // Allow NULL values to be inserted into the column
            $table->tinyInteger('is_activate')->default(0);
            $table->timestamps(); // Add nullable creation and update timestamps to the table.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
