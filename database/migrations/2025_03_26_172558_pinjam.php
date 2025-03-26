<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $table='pinjam';
    public function up(): void
    {
        Schema::create($this->table, function(Blueprint $table){
            $table->integer('id_pinjam',true,false)->nullable(false);
            $table->string('kode_barang',200)->nullable(false);
            $table->integer('nis',false,false)->nullable(false);
            $table->integer('jmlh_alat_dipinjam',false,false)->nullable(false);
            $table->dateTime('tgl_pinjam',0)->default('2024-01-01')->nullable(false);
            $table->timestamps();
            //foreign key
            $table->foreign('nis','ConstraintNis')->on('user')->references('nis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_barang','ConstraintIdBarang')->on('barang')->references('kode_barang')->onDelete('cascade')->onUpdate('cascade');
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
