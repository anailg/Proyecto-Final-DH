<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('direccion_id')->unsigned();
            $table->date('fecha_entrega');
            $table->string('horario_entrega',100);
            $table->timestamps();           
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('pedido_items', function (Blueprint $table) {
            $table->integer('pedido_id')->unsigned();
            $table->mediumInteger('producto_id')->unsigned();
            $table->smallInteger('cantidad')->unsigned();
            $table->float('precio',10,2)->default(0);
            $table->timestamps();
            $table->primary('pedido_id','producto_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('producto_id')->references('id')->on('productos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_items');
        Schema::dropIfExists('pedidos');
    }
}
