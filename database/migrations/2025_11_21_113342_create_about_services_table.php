<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('about_services', function (Blueprint $table) {
        $table->id();
        $table->string('title');      // başlık
        $table->text('text');         // açıklama
        $table->string('image');      // görsel
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('about_services');
}

};
