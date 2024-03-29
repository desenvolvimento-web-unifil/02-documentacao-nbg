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
        Schema::create('saques', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_saque');
            $table->decimal('valor');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('banco');
            $table->string('nomeTitular');
            $table->integer('nConta');
            $table->integer('nAgencia');
            $table->string('tipoConta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saques');
    }
};
