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
        Schema::create('tb_supplier', function (Blueprint $table) {
            $table->increments('supplier_id');
            $table->string('supplier_nama');
            $table->string('supplier_hp');
            $table->string('supplier_alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_supplier');
    }
};
