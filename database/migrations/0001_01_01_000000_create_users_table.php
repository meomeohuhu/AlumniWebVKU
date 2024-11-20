<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Tên tài khoản phải là duy nhất
            $table->string('email')->unique(); // Email duy nhất
            $table->string('password'); // Mật khẩu
            $table->rememberToken(); // Token để ghi nhớ đăng nhập
            $table->timestamps(); // Thời gian tạo và cập nhật

            // Thông tin cá nhân
            $table->string('fullname'); // Họ và tên đầy đủ
            $table->date('birthdate')->nullable(); // Ngày sinh, nullable nếu không bắt buộc
            $table->string('phone', 15)->nullable(); // Số điện thoại (giới hạn độ dài)
            $table->string('major')->nullable(); // Ngành học
            $table->string('faculty')->nullable(); // Khoa
            $table->year('enrollment_year')->nullable(); // Năm nhập học (đặt tên rõ nghĩa hơn)
            $table->string('education_system')->nullable();
            $table->string('level')->nullable();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
