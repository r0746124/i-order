<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('product_category');
            $table->timestamps();
        });

        $list = array('menu', 'fast food', 'pizza', 'sandwich', 'dessert', 'appetizer', 'appetizer', 'appetizer');
        // inserting data
        for ($i = 0; $i <= 7; $i++) {
            DB::table('product_categories')->insert(
                [
                    'product_category' => $list[$i]

                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
