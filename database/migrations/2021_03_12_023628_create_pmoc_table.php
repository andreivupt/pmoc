<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmoc', function (Blueprint $table) {
            $table->id();
            $table->integer('machine_id');
            $table->string('done', 1)->default('S');
            $table->string('operations', 1)->default('S');
            $table->string('hygiene', 1)->default('S');
            $table->string('filters', 1)->default('S');
            $table->string('terminals', 1)->default('S');
            $table->string('drains', 1)->default('S');
            $table->string('evap_temperature', 1)->default('S');
            $table->string('thermostat', 1)->default('S');
            $table->string('leak', 1)->default('S');
            $table->string('isolation', 1)->default('S');
            $table->string('pressures', 1)->default('S');
            $table->string('tensions');
            $table->string('eletric_current');
            $table->string('eletric_terminals', 1)->default('S');
            $table->string('turbine_cleaning', 1)->default('S');
            $table->string('serpentine_cleaning', 1)->default('S');
            $table->string('external_temperature');
            $table->string('internal_temperature');
            $table->string('return_temperature');
            $table->string('return_insufflation');
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
        Schema::dropIfExists('pmoc');
    }
}
