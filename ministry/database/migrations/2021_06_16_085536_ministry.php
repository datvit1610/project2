<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ministry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministry', function (Blueprint $table) {
            $table->increments('idMinistry');
            $table->string('nameMinistry', 50);
            $table->string('email', 100)->unique();
            $table->string('passWord', 30);
            $table->char('phone', 10)->unique();
            $table->boolean('role');
            $table->boolean('block');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ministry');
    }
}
