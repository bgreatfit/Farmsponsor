<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('user_id');
            $table->integer('status_id')->default(1);
            $table->string('ip_address');
            $table->dateTime('start_date');
            $table->dateTime('due_date');
            $table->integer('start_unit');
            $table->integer('units');
            $table->integer('returns');
            $table->integer('sold_out')->default(0);
            $table->integer('payout')->default(0);
            $table->string('avatar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farms');
    }
}
