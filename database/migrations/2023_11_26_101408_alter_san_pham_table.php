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
        Schema::table('san_pham', function (Blueprint $table) {
            $table->foreign('size_id')->references('id')->on('size')->onDelete('cascade');
            $table->foreign('danh_muc_id')->references('id')->on('danh_muc')->onDelete('cascade');
            $table->foreign('mau_sac_id')->references('id')->on('mau_sac')->onDelete('cascade');
            $table->foreign('hinh_anh_id')->references('id')->on('hinh_anh_san_pham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('san_pham', function (Blueprint $table) {
            $table->dropForeign(['size_id']);
            $table->dropForeign(['danh_muc_id']);
            $table->dropForeign(['mau_sac_id']);
            $table->dropForeign(['hinh_anh_id']);
        });
    
        Schema::table('san_pham', function (Blueprint $table) {
            $table->dropColumn('size_id');
            $table->dropColumn('danh_muc_id');
            $table->dropColumn('mau_sac_id');
            $table->dropColumn('hinh_anh_id');
        });
    }
};
