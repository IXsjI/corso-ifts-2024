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
        Schema::create('species', function (Blueprint $table) {
            $table->id('specie_id');
            $table->string('s_nome', 50);
            $table->text('s_immagine');
            $table->text('s_descrizione');
            $table->string('s_stato_conservazione', 50);
            $table->unsignedBigInteger('s_area_id');
            $table->foreign('s_area_id')->references('area_id')->on('areas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
