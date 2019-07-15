<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsToFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('farms', function (Blueprint $table) {
            $table->dateTime('cycle_start_date')->after('due_date');
            $table->dateTime('cycle_end_date')->after('cycle_start_date');
            $table->dateTime('payout_date')->after('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('farms', function (Blueprint $table) {
            $table->dropColumn(['cycle_start_date', 'cycle_end_date', 'payout_date']);
        });
    }
}
