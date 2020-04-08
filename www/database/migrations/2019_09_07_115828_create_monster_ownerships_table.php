<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_ownerships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('monster_list_id')->references('monster_lists')->on('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('monster_id')->references('monsters')->on('id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monster_ownerships');
    }
}
