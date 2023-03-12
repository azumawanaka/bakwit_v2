<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvacuationCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evacuation_centers', function (Blueprint $table) {
            $table->id();
            $table->integer('evacuation_center_type_id');
            $table->integer('barangay_id');
            $table->integer('max_capacity')->default(0);
            $table->boolean('is_evacuation_center_full')->default(false);
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
        Schema::dropIfExists('evacuation_centers');
    }
}
