<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('files')) {
            Schema::create('files', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('evacuation_center_id');
                $table->foreign('evacuation_center_id')
                    ->references('id')
                    ->on('evacuation_centers')
                    ->onDelete('cascade');
                $table->string('name');
                $table->string('path');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
