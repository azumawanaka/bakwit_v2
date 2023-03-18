<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIsPwdFromEvacueeInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evacuee_infos', function (Blueprint $table) {
            $table->boolean('is_pwd')->default(false)->after('is_head');
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
            $table->dropColumn('is_pwd');
        });
    }
}
