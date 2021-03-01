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
            $table->string('name');
            $table->string('name_latin');
            $table->string('rootstock')->nullable();
            $table->date('planting_date');
            $table->string('origin_from');
            $table->integer('bloom_start_week');
            $table->integer('bloom_end_week');
            $table->integer('harvest_start_week');
            $table->integer('harvest_end_week');
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
