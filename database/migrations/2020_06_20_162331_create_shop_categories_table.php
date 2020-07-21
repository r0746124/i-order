<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateShopCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->timestamps();
        });

        //inserting data
        DB::table('shop_categories')->insert(
            [
                [
                    'category' => 'fast food',
                    'created_at' => now(),
                ],
                [
                    'category' => 'supermarket',
                    'created_at' => now(),
                ],
                [
                    'category' => 'pharmacy',
                    'created_at' => now(),
                ],
                [
                    'category' => 'vegetables',
                    'created_at' => now(),
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_categories');
    }
}
