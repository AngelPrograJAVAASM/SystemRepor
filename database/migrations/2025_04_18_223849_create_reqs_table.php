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
        Schema::create('reqs', function (Blueprint $table) {
            $table->id('id')->primary()->length(11);
            $table->decimal('all_reqs', 7, 2, 'not null');
            $table->integer('numeber_material');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqs');
    }
};
