<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsForBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barangays', function($table) {
            $table->boolean('is_flood_prone')->default(false);
            $table->boolean('is_storm_surge')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barangays', function($table) {
            $table->dropColumn('is_flood_prone', 'is_storm_surge');
        });
    }
}
