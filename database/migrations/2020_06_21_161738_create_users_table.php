<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_arabic')->nullable();
            $table->foreignId('gender_id');
            $table->foreignId('user_type_id')->nullable();
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('township');
            $table->string('city')->nullable();
            $table->foreignId('location_id')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('subscribed_for_email')->default(false);
            $table->boolean('subscribed_for_sms')->default(false);
            $table->rememberToken();
            $table->timestamps();

            // Foreign key relations
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('user_type_id')->references('id')->on('user_types')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
        });

        // insert data
        DB::table('users')->insert(
            [
                [
                    'first_name' => 'Aiman',
                    'last_name' => 'Abdal',
                    'name_arabic' => 'ايمن عبد السلام',
                    'gender_id' => 1,
                    'user_type_id' => 1,
                    'email' => 'aiman@mailinator.com',
                    'date_of_birth' => date('Y/m/d',strtotime('01/08/1994')),
                    'email_verified_at' => null,
                    'password' => Hash::make('user123'),
                    'phone' => '0032465484086',
                    'address' => 'grote vondelweg 3',
                    'township' => 'oud-turnhout',
                    'city' => 'oud-turnhout',
                    'zipcode' => null,
                    'photo' => null,
                    'created_at' => now(),

                ],
                [
                    'first_name' => 'huzifa',
                    'last_name' => 'abdul',
                    'name_arabic' => 'حذيفه عبداللطيف',
                    'gender_id' => 1,
                    'user_type_id' => 2,
                    'email' => 'huzifa@mailinator.com',
                    'date_of_birth' => date('Y/m/d',strtotime('01/08/1994')),
                    'email_verified_at' => null,
                    'password' => Hash::make('user123'),
                    'phone' => '0032465484087',
                    'address' => 'grote vondelweg 3',
                    'township' => 'oud-turnhout',
                    'city' => null,
                    'zipcode' => null,
                    'photo' => null,
                    'created_at' => now(),

                ],
            ]
        );

        // Adding 7 dummy couriers
        for ($i = 0; $i <= 7; $i++) {
            DB::table('users')->insert(
                [
                    'first_name' => 'user',
                    'last_name' => $i,
                    'name_arabic' => null,
                    'gender_id' => 1,
                    'user_type_id' => 3,
                    'email' => 'user'.$i.'@mailinator.com',
                    'date_of_birth' => date('Y/m/d',strtotime('01/08/1995')),
                    'password' => Hash::make('user123'),
                    'phone' => '003246548458'.$i,
                    'address' => 'grote vondelweg 3',
                    'township' => 'oud-turnhout',
                    'city' => 'oud-turnhout',
                    'zipcode' => null,
                    'photo' => null,
                    'created_at' => now(),
                ]
            );
        }

        // Adding 30 dummy users
        $gender = 1;
        for ($i = 8; $i <= 30; $i++) {
            if ($i > 15)
            {
                $gender = 2;
            }
            DB::table('users')->insert(
                [
                    'first_name' => 'user',
                    'last_name' => $i,
                    'name_arabic' => null,
                    'gender_id' => $gender,
                    'user_type_id' => 3,
                    'email' => 'user'.$i.'@mailinator.com',
                    'date_of_birth' => date( 'Y/m/d',strtotime('01/08/1995')),
                    'password' => Hash::make('user123'),
                    'phone' => '00324654'.$i.'4408',
                    'address' => 'grote vondelweg 3',
                    'township' => 'oud-turnhout',
                    'city' => 'oud-turnhout',
                    'zipcode' => null,
                    'photo' => null,
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
        Schema::dropIfExists('users');
    }
}
