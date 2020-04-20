<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
   
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id_empleado');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('email');
            $table->string('password');
            $table->boolean('status');
         });
    }
    
    public function down()
    {
        Schema::drop('empleados');
    }
}
