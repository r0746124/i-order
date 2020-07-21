<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $table->id();
            $table->string('name');
            $table->string('name_arabic');
            $table->string('info')->nullable();
            $table->string('info_arabic')->nullable();
            $table->float('price', 5, 2);
            $table->foreignId('product_cat_id');
            $table->string('photo')->nullable();
            $table->foreignId('shop_id');
            $table->timestamps();

            // Foreign key relations
            $table->foreign('product_cat_id')->references('id')->on('product_categories')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('restrict')->onUpdate('restrict');
        });
        //products list
        //$product = array('')
        // inserting data
        for ($i = 0; $i <= 6; $i++) {
            for ($x = 0; $x <= 15; $x++) {
                DB::table('products')->insert(
                    [
                        'name' => 'product '.(($i+1)+$x),
                        'price' => ((200.00)/($x+1+$i))+100,
                        'product_cat_id' => $i+1,
                        'shop_id' => $i + 1,
                    ]
                );
            }
        }
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
