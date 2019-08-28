<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToPricing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pricings', function (Blueprint $table) {
            $table->string('link')->nullable()->change();
            $table->string('icon')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pricings', function (Blueprint $table) {
            $table->dropColumn('link');
            $table->dropColumn('icon');
        });
    }
}
