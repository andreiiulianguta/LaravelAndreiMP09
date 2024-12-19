<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('año');
            $table->string('combustible');
            $table->integer('precio');


        });
    }

  public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
