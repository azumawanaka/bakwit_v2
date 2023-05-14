<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToEvacueesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evacuee_infos', function (Blueprint $table) {
            $table->boolean('is_pregnant')->after('is_pwd');
            $table->boolean('is_infant')->after('is_pregnant');
            $table->boolean('is_senior')->after('is_infant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evacuee_infos', function (Blueprint $table) {
            $table->dropColumns(['is_pregnant', 'is_infant', 'is_senior']);
        });
    }
}
