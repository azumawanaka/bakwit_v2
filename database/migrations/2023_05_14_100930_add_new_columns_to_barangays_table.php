<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barangays', function (Blueprint $table) {
            $table->boolean('is_land_slide')->after('is_storm_surge');
            $table->boolean('is_earthquake')->after('is_land_slide');
            $table->boolean('is_tsunami')->after('is_earthquake');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barangays', function (Blueprint $table) {
            $table->dropColumns(['is_land_slide', 'is_earthquake', 'is_tsunami']);
        });
    }
}
