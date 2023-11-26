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
        Schema::create('hinh_anh_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('san_pham_id');
            $table->timestamps();
        });
        Schema::table('hinh_anh_san_pham', function (Blueprint $table) {
            $table->foreign('san_pham_id')->references('id')->on('san_pham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hinh_anh_san_pham', function (Blueprint $table) {
            $table->dropForeign(['san_pham_id']);
            $table->dropColumn('san_pham_id');
        });

        Schema::dropIfExists('hinh_anh_san_pham');
    }
};
