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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim');
            $table->string('program');
            $table->string('judul');
            $table->string('tahun');
            $table->string('link_doi')->nullable();
            $table->string('kata_kunci');
            $table->string('file')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('dosenpembimbing1');
            $table->string('dosenpembimbing2');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
