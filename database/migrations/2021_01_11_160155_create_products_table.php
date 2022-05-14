<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('c_id')->unsigned();
            $table->foreign('c_id')->references('id')->on('catagories')->onDelete('cascade')->onUpdate('cascade');
            $table->biginteger('product_sub_cat')->unsigned();
            $table->foreign('product_sub_cat')->references('sub_id')->on('subcategories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('p_name',100);
            $table->string('m_name',100);
            $table->integer('p_price');
            $table->integer('s_price');
            $table->integer('w_price');
            $table->integer('d_price');
            $table->integer('p_quan');
            $table->string('p_image')->nullable();

            $table->timestamps();
        });
         // DB::statement('ALTER TABLE products ADD CONSTRAINT chk_quantity CHECK (p_quan > 0);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
