<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Trường name
            $table->string('photo')->nullable();  // Trường photo (nullable)
            $table->date('date_of_birth');  // Trường date_of_birth
            $table->string('phone');  // Trường phone
            $table->string('email')->unique();  // Trường email (unique)
            $table->string('workplace');  // Trường workplace
            $table->string('position');  // Trường position
            $table->timestamps();  // Tự động tạo created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board');
    }
}
