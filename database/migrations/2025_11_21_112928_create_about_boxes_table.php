<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('about_boxes', function (Blueprint $table) {
        $table->id();
        $table->string('title');   // kutu başlığı
        $table->text('text');      // kutu açıklaması
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('about_boxes');
}

};
