<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
             $table->bigInteger('p_id')->unsigned();
            $table->foreign('p_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->integer('active')->Default(0);
            $table->integer('price')->Default(0);
            $table->Integer('cart_discount_in_percentage')->Default(0);
            $table->Integer('cart_discount_in_tk')->Default(0);
            $table->String('cart_discount_description')->nullable();
            $table->String("pagefrom");
            $table->String('shipping')->Default("Sundorban");
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
        Schema::dropIfExists('carts');
    }
}
