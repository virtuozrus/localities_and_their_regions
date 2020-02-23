<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->foreign('locality')
                ->references('id')
                ->on('localities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->dropForeign('districts_locality_foreign');
        });
    }
}
