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
        Schema::create('whare', function (Blueprint $table) {
            $table->id('id')->primary()->length(11);
            $table->string('description');
            $table->string('specifications');
            $table->string('tipo');
            $table->decimal('cost_reqs', 5, 2);
            $table->timestamps();

            $table->unsignedBigInteger('number_reqs');
            $table->foreign('number_reqs')->references('number_reqs')->on('reqs');
        });
    }

    /**5, 2
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whare');
    }
};
