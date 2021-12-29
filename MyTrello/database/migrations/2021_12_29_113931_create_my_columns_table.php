<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_columns', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->bigInteger('table_id')->unsigned()->default(1);
            $table->foreign('table_id')->references('id')->on('my_tables')->onDelete('cascade');
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
        Schema::dropIfExists('my_columns');
    }
}
