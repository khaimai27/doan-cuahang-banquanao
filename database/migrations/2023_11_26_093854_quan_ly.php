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
        Schema::create('quan_ly', function (Blueprint $table) {
            $table->id(); 
            $table->string('ten');
            $table->string('account');
            $table->string('password');
            $table->string('so_dien_thoai', 10); 
            $table->string('dia_chi');
            $table->string('email');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('quan_ly');
    }
};
