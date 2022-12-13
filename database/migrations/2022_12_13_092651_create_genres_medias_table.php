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
        Schema::create('genres_medias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medias_id');
            $table->unsignedBigInteger('genres_id');
            $table->timestamps();

            $table->foreign('medias_id')->references('id')->on('medias')->onDelete('cascade');
            $table->foreign('genres_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres_medias');
    }
};
