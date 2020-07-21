<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateShopOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_opening_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id');
            $table->foreignId('opening_hour_id');
            $table->timestamps();
        });

        // inserting data
        for ($i = 0; $i <= 6; $i++) {
            for ($x = 0; $x <= 6; $x++) {
                DB::table('shop_opening_hours')->insert(
                    [
                        'shop_id' => $i+1,
                        'opening_hour_id' => $x + 1,

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
        Schema::dropIfExists('shop_opening_hours');
    }
}
