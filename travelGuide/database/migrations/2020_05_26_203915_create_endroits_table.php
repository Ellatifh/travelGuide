<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndroitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endroits', function (Blueprint $table) {
            $table->uuid('reference')->primary();
            $table->string('name');
            $table->string('description');
            $table->string('adresse1');
            $table->string('adresse2');
            $table->string('email');
            $table->string('telephone');
            $table->string('website');
            $table->dateTime('startTime');
            $table->dateTime('endTime');
            $table->integer('zipcode');
            $table->string('longitude');
            $table->string('latitude');
            $table->foreignId('categorie')->constrained('categories')->onDelete('cascade');
            $table->foreignId('refCity')->constrained('cities')->onDelete('cascade');
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

        Schema::dropIfExists('endroits');
    }
}
