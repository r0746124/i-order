<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opening_hours', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->time('from');
            $table->time('to');
            $table->timestamps();

        });

        $list = array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');

        for ($i = 0; $i <= 6; $i++) {
            for ($x = 0; $x <= 6; $x++) {
                DB::table('opening_hours')->insert(
                    [
                        'day' => $i,
                        'from' => "15:00:00",
                        'to' => "02:00:00",

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
        Schema::dropIfExists('opening_hours');
    }
}
