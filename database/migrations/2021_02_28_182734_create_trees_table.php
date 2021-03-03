<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number')->nullable();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('name_latin')->nullable();
            $table->string('rootstock')->nullable();
            $table->date('planting_date')->nullable();
            $table->string('origin_from')->nullable();
            $table->integer('bloom_start_week')->nullable();
            $table->integer('bloom_end_week')->nullable();
            $table->integer('harvest_start_week')->nullable();
            $table->integer('harvest_end_week')->nullable();
            $table->text('body')->nullable();
            $table->string('background_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trees');
    }
}
