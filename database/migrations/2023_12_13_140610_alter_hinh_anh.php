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
        Schema::table('hinh_anh', function (Blueprint $table) {
            $table->foreign('nhan_vien_id')->references('id')->on('nhan_vien')->onDelete('cascade');
        });
        Schema::table('nhan_vien', function (Blueprint $table) {
            $table->foreign('hinh_anh_id')->references('id')->on('hinh_anh')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hinh_anh', function (Blueprint $table) {
            $table->dropForeign(['hinh_anh_id']);
            $table->dropColumn('hinh_anh_id');
        });
        Schema::table('nhan_vien', function (Blueprint $table) {
            $table->dropForeign(['hinh_anh_id']);
            $table->dropColumn('hinh_anh_id');
        });
    }
};
