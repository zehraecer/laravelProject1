<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('about_stats', function (Blueprint $table) {
        $table->id();
        $table->string('value');   // sayı (250+, 12 Yıl vb.)
        $table->string('text');    // açıklama (mutlu müşteri vb.)
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('about_stats');
}

};
