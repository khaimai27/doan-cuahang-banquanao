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
        Schema::create('hinh_anh_nguoi_dung', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('nguoi_dung_id');
            $table->timestamps();
        });
        Schema::table('hinh_anh_nguoi_dung', function (Blueprint $table) {
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dung')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hinh_anh_nguoi_dung', function (Blueprint $table) {
            $table->dropForeign(['nguoi_dung_id']);
            $table->dropColumn('nguoi_dung_id');
        });

        Schema::dropIfExists('hinh_anh_nguoi_dung');
    }
};
