<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // Untuk 'Surabi Duren', 'Aneka Minuman', dll.
            $table->string('name');     // Untuk 'Duren Keju', 'Telur Mayo', dll.
            $table->text('description')->nullable(); // Untuk deskripsi tambahan
            $table->integer('price');   // Harga dalam Rupiah (tanpa koma)
            $table->boolean('is_top_pick')->default(false); // Untuk 'Resto's Top Picks'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};