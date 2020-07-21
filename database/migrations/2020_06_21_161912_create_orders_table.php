<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //products not necessary to create here/ for date use created_at
        // location => deliver location
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->double('total_price');
            $table->double('discount')->nullable();
            $table->boolean('must_be_delivered')->default(True);
            $table->boolean('paid')->default(false);
            $table->foreignId('payment_method_id');
            $table->foreignId('location_id');
            $table->foreignId('courier_id')->nullable();
            $table->foreignId('shop_id');
            $table->timestamp('deliver_time')->nullable();
            $table->timestamp('delivered_at');
            $table->timestamps();

            // Foreign key relations
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('courier_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('restrict')->onUpdate('restrict');
        });
        //couriers_id from 3 to 9
        // insert data
        for ($i = 0; $i <= 6; $i++) {
            DB::table('orders')->insert(
                [
                    [
                        'order_number' => '20200625478'.$i,
                        'total_price' => 800.95+$i,
                        'payment_method_id' => 1,
                        'location_id' => 1,
                        'courier_id' => $i+3,
                        'shop_id' => $i+1,
                        'delivered_at' => now(),
                        'created_at' => now(),
                    ],
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
        Schema::dropIfExists('orders');
    }
}
