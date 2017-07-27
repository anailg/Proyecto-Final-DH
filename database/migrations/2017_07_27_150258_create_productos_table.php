<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {            
            $table->mediumIncrements('id');
            $table->string('nombre',50)->unique();
            $table->string('descripcion',500);
            $table->string('especificaciones',200) ->nullable();
            $table->boolean('activo')->default(true);                       
            $table->float('precio',10,2)->default(0);
            $table->string('imagen',100)->nullable(); 
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('productos');
    }
}
