<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_cards', function (Blueprint $table) {
            $table->id();
            $table->string('rgba')->nullable();
            $table->longText('task')->nullable();
            $table->bigInteger('column_id')->unsigned()->default(1);
            $table->foreign('column_id')->references('id')->on('my_columns')->onDelete('cascade');
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
        Schema::dropIfExists('my_cards');
    }
}
