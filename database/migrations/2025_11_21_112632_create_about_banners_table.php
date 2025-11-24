<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
{
    Schema::create('about_banners', function (Blueprint $table) {
        $table->id();
        $table->string('image');         // görsel yolu
        $table->string('title');         // başlık
        $table->text('description');      // açıklama
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('about_banners');
}

};
