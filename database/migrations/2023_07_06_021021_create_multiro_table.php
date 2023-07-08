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
        Schema::create('multiro', function (Blueprint $table) {
            $table->id();
            $table->string('host');
            $table->string('username');
            $table->string('password');
            $table->string('router');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('nservice')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiro');
    }
};
