<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('motorization');
            $table->unsignedInteger('modele_id');
            $table->unsignedInteger('phase_id');
            $table->unsignedInteger('pricerange_id');
            $table->foreign('modele_id')->references('id')->on('modele')->onDelete('cascade');
            $table->foreign('phase_id')->references('id')->on('phase')->onDelete('cascade');
            $table->foreign('pricerange_id')->references('id')->on('pricerange')->onDelete('cascade');
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
        Schema::dropIfExists('car');
    }
};
