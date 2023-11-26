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
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->id(); 
            $table->string('ten');
            $table->string('account');
            $table->string('password');
            $table->bigInteger('so_dien_thoai'); 
            $table->string('dia_chi');
            $table->string('email');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhan_vien');
    }
};
