<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->integer('productID')->unique();
            $table->timestamps();
            $table->integer('userID')->unsigned();
            
            $table->integer('quantity');
            $table->integer('orderStatus');



            $table->foreign('userID')
                    ->references('id')->on('users');
          
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
        
    }
}
