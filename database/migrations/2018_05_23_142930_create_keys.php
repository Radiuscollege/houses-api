<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function(Blueprint $table){
            $table->foreign('house_id')->references('id')->on('houses');
        });

        Schema::table('logs', function(Blueprint $table){
            $table->foreign('profile_id')->references('studentnr')->on('profiles');
            // $table->foreign('giver_id')->references('studentnr')->on('profiles');
        });

        Schema::table('badge_profile', function(Blueprint $table) {
            $table->foreign('badge_id')->references('id')->on('badges');
            $table->foreign('profile_id')->references('studentnr')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
