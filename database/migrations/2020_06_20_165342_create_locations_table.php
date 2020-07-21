<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

        //inset locations

        DB::table('locations')->insert(
            [
                [
                    'longitude' => '15.578020',
                    'latitude' => '32.544588',
                ],
                [
                    'longitude' => '15.577080',
                    'latitude' => '32.548007',
                ],
                [
                    'longitude' => '15.575065',
                    'latitude' => '32.548747',
                ],
                [
                    'longitude' => '15.584878',
                    'latitude' => ' 32.528252',
                ],
                [
                    'longitude' => '15.562082',
                    'latitude' => ' 32.564288',
                ],
                [
                    'longitude' => '15.561021',
                    'latitude' => '32.559697',
                ],
                [
                    'longitude' => '15.560235',
                    'latitude' => '32.558882',
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
        Schema::dropIfExists('locations');
    }
}
