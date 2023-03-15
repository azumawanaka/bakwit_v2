<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvacueeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evacuee_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evacuee_id')
                ->constrained('evacuees')
                ->onDelete('cascade');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('gender');
            $table->text('age');
            $table->boolean('is_head')->default(false);
            $table->text('purok')->nullable();
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
        Schema::dropIfExists('evac_lists');
    }
}
