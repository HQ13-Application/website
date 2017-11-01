<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $products) {
            $products->increments('id');
            $products->String('productName');
            $products->String('productCode')->unique();
            $products->float('productWeight');
            $products->float('productPrice');
            $products->timestamps();
            $products->integer('productStatus');
            $products->String('productLongDesc');
            $products->String('productShortDesc');
            $products->String('productMainImage');
            $products->String('productOtherImages');
            $products->integer('productQuantity');
            $products->integer('productCategoryID');
            $products->String('productLocation');

             });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
        
    }
}
