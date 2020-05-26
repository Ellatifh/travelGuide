<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hebergements', function (Blueprint $table) {
            $table->id();
            $table->string("refEndroit");
            $table->foreign('refEndroit')->references('reference')->on('endroits');
            $table->string("ranking");
            $table->boolean("wifi");
            $table->boolean("piscine");
            $table->boolean("restaurant");
            $table->boolean("spa");
            $table->boolean("fitness");
            $table->integer("rooms");
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
        Schema::dropIfExists('hebergements');
    }
}
