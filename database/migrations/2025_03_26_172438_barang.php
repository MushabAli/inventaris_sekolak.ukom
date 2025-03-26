<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $table='barang';
    public function up(): void
    {
        Schema::create($this->table, function(Blueprint $table){
            $table->string('kode_barang')->primary()->nullable(false);
            $table->string('no_seri_pabrik',200)->nullable(false);
            $table->dateTime('tahun_pembelian',0)->default('2025-01-01')->nullable(false);
            $table->string('jenis_Barang',200)->nullable(false);
            $table->string('status',200)->nullable(false);
            $table->string('foto')->nullable(false);
            $table->string('nama_barang',200)->nullable(false);
            $table->string('merk',200)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
};
