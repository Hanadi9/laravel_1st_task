<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //create a table "students_table" with fields "name,email,phone,verified"
     
    public function up()
    {
        Schema::create('students_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->boolean('verified')->default(false);
            $table->integer('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_tables');
    }
}
