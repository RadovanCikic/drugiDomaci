<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActorColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->string('gender');
            $table->string('email');
            $table->string('instagram');
            $table->string('personal_site')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->removeColumn('gender');
            $table->removeColumn('email');
            $table->removeColumn('instagram');
            $table->removeColumn('personal_site');
        });
    }
}
