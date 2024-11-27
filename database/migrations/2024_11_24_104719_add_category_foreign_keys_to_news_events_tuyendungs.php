<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryForeignKeysToNewsEventsTuyendungs extends Migration
{
    public function up()
    {
        // Cập nhật bảng news
        Schema::table('news', function (Blueprint $table) {
            // Kiểm tra nếu đã có cột category_id
            if (!Schema::hasColumn('news', 'category_id')) {
                $table->unsignedBigInteger('category_id')->nullable()->after('id');
            }

            // Thêm khóa ngoại nếu chưa có
            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
        });

        // Cập nhật bảng events
        Schema::table('events', function (Blueprint $table) {
            if (!Schema::hasColumn('events', 'category_id')) {
                $table->unsignedBigInteger('category_id')->nullable()->after('id');
            }

            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
        });

        // Cập nhật bảng tuyendungs
        Schema::table('tuyendung', function (Blueprint $table) {
            if (!Schema::hasColumn('tuyendung', 'category_id')) {
                $table->unsignedBigInteger('category_id')->nullable()->after('id');
            }

            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        // Xóa khóa ngoại và cột category_id trong bảng news
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        // Xóa khóa ngoại và cột category_id trong bảng events
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        // Xóa khóa ngoại và cột category_id trong bảng tuyendungs
        Schema::table('tuyendungs', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}
