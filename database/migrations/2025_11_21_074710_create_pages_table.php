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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');                 // Sayfa başlığı
            $table->string('slug')->unique();        // URL
            $table->text('content');                 // İçerik
            $table->boolean('is_active')->default(true); // Yayında mı?
            $table->unsignedBigInteger('created_by');    // Hangi admin ekledi
            $table->unsignedBigInteger('updated_by')->nullable(); // Hangi admin güncelledi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
