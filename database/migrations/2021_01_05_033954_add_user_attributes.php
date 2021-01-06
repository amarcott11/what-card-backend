<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('cashback')->default('0');
            $table->boolean('business')->default('1');
            $table->boolean('premium')->default('1');
            $table->boolean('chase')->default('1');
            $table->boolean('annual_fee')->default('1');
            $table->boolean('completed_questionaire')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('paid');
    }
}
