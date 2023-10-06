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
        Schema::create('modele_phase', function (Blueprint $table) {
            $table->unsignedInteger('modele_id');
            $table->unsignedInteger('phase_id');
            $table->foreign('modele_id')->references('id')->on('modele')->onDelete('cascade');
            $table->foreign('phase_id')->references('id')->on('phase')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele_phase');
    }
};
