<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Logo => logo of the shop
        //photo => a picture to show the users or to clear the location
        //bio => a description about the shop
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_arabic');
            $table->foreignId('location_id');
            $table->string('shop_reference')->unique();
            $table->string('food_type')->nullable();;
            $table->string('address');
            $table->string('township');
            $table->string('city');
            $table->string('zipcode')->nullable();
            $table->boolean('has_delivery')->default(true);
            $table->float('delivery_cost',5,2 )->nullable();
            $table->string('logo')->nullable();
            $table->string('photo')->nullable();
            $table->string('telephone')->nullable();
            $table->float('min_budget', 5, 2)->nullable();
            $table->foreignId('shop_category_id');
            $table->longText('bio')->nullable();
            $table->timestamps();

            // Foreign key relations
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('shop_category_id')->references('id')->on('shop_categories')->onDelete('restrict')->onUpdate('restrict');

        });
            // Adding dummy shops_categories
            //locations from 1 to 7 is for shops
        $food_types = array('مأكولات بحريه', 'وجبات سريعه', 'بيرقر و شاورما', 'سندوتشات طعميه', 'وجبات سوريه', 'باسطه و حلويات', 'أقاشي ولحوم');
        $shops_names_arabic = array('حوش السمك','تونتي فور' ,'البيت الشامي' ,'ملك الفول والطعميه', 'البيت السوري', 'ود الباشا', 'أقاشي العاصمه' );
        $shops_townships = array('al-amaraat', 'al-emtidad', 'al-taif', 'al-riyadh', 'al-ma\'omra', 'nuzha', 'khartoum 2');
        for ($i = 0; $i <= 6; $i++) {
            DB::table('shops')->insert(
                [
                    'name' => 'shop '.$i,
                    'name_arabic' => $shops_names_arabic[$i],
                    'shop_reference' => 'ab254766'.$i,
                    'food_type' => $food_types[$i],
                    'location_id' => $i+1,
                    'address' => 'street'.$i,
                    'township' => $shops_townships[$i],
                    'city' => 'khartoum',
                    'zipcode' => null,
                    'delivery_cost' => ((200.00)/($i+1))+100,
                    'photo' => null,
                    'telephone' => '0032465484086',
                    'min_budget' => ((400.00)/($i+1))+150,
                    'shop_category_id' => 1,
                    'bio' => 'This is the bio of the shop. Here you can introduce the shop and replace notifications',
                    'created_at' => now(),
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
        Schema::dropIfExists('shops');
    }
}
