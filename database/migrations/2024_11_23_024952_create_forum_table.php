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
    Schema::create('forum', function (Blueprint $table) {
        $table->id(); // Tự tăng ID
        $table->text('content'); // Nội dung bài viết
        $table->string('image')->nullable(); // Đường dẫn ảnh (có thể null)
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Liên kết với bảng users
        $table->timestamps(); // Các cột created_at và updated_at
        $table->integer('likes_count')->default(0);  // Cột để lưu số lượt thích
        $table->integer('comments_count')->default(0);  // Cột để lưu số bình luận
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum');
        Schema::table('forum', function (Blueprint $table) {
            $table->dropColumn('likes_count');
            $table->dropColumn('comments_count');
        });
    }
};
