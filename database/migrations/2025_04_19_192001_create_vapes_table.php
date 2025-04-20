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
        Schema::create('vapes', function (Blueprint $table) {
            $table->increments('id_vape');
            $table->string('nama');
            $table->integer('harga');
            $table->decimal('bobot_harga', 5, 2)->default(0.00);

            $table->integer('baterai');
            $table->decimal('bobot_baterai', 5, 2)->default(0.00);

            $table->enum('pengisian_daya', ['Cepat', 'Normal']);
            $table->decimal('bobot_pengisian_daya', 5, 2)->default(0.00);

            $table->enum('kemudahan_penggunaan', ['Mudah', 'Sedang', 'Expert']);
            $table->decimal('bobot_kemudahan_penggunaan', 5, 2)->default(0.00);
            
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vapes');
    }
};
