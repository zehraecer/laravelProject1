<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
       Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
       Schema::dropIfExists('home_abouts');

    }

};
