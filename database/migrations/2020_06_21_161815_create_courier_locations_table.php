<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courier_id');
            $table->foreignId('location_id');
            $table->timestamps();
            //for time use created_at later

            // Foreign key relations
            $table->foreign('courier_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courier_locations');
    }
}
