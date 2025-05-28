<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('returnmail', function (Blueprint $table) {
            $table->id('id')->primary()->length(11);
            $table->string('description');
            $table->string('specifications');
            $table->string('site');
            $table->timestamps();

            $table->unsignedBigInteger('id_employ');
            $table->foreign('id_employ')->references('id')->on('employs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returnmail');
    }
};
