<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('characters_number');
            $table->integer('version')->default(2);
            $table->boolean('normal');
            $table->boolean('arch');
            $table->boolean('dungeon');
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
        Schema::dropIfExists('monster_lists');
    }
}
