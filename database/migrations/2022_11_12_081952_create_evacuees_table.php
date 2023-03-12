<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvacueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evacuees', function (Blueprint $table) {
            $table->id();
            $table->integer('evacuation_center_id');
            $table->integer('family_count')->default(0);
            $table->integer('male_count')->default(0);
            $table->integer('female_count')->default(0);
            $table->integer('pwd_count')->default(0);
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
        Schema::dropIfExists('evacuees');
    }
}
