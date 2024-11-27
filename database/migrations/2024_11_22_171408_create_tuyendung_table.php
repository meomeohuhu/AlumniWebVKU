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
        Schema::create('Tuyendung', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('title'); // Tiêu đề bài viết
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('location')->nullable();
            $table->string('experience')->nullable();
            $table->string('time')->nullable();
            $table->string('status')->default('open');
            $table->string('image')->nullable(); // Thêm cột image
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();
        });
    }
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuyendung');
    }
};
