<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierLogBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_log_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courier_id'); //probeer met courier_id
            $table->timestamp('date');
            $table->time('from');
            $table->time('to');
            $table->timestamps();

            // Foreign key relations
            $table->foreign('courier_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courier_log_books');
    }
}
