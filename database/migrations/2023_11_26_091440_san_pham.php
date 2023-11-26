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
    Schema::create('san_pham', function (Blueprint $table) {
        $table->id();
        $table->string('ten');
        $table->unsignedBigInteger('danh_muc_id');
        $table->unsignedBigInteger('mau_sac_id');
        $table->unsignedBigInteger('size_id');
        $table->integer('so_luong_ton');
        $table->integer('gia');
        $table->string('mo_ta');
        $table->unsignedBigInteger('hinh_anh_id')->nullable();
        $table->timestamps();
    });

    
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    
        Schema::dropIfExists('san_pham');
    }
};
