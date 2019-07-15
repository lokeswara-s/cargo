<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('created_id');
            $table->string('weight');
            $table->string('material_type');
            $table->string('first_name_detail');
            $table->string('last_name_detail');
            $table->string('city_detail');
            $table->string('state_detail');
            $table->string('country_detail');
            $table->string('first_name_detail_dest');
            $table->string('last_name_detail_dest');
            $table->string('destination_value_detail_dest');
            $table->string('cont_info_detail_dest');
            $table->string('source');
            $table->timestamp('created_at')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
