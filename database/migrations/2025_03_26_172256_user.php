<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $table='user';
    public function up(): void
    {
        Schema::create($this->table, function(Blueprint $table){
            $table->integer('nis')->primary()->nullable(false);
            $table->string('username',200)->nullable(false);
            $table->string('no_telpon',20)->nullable(false);
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
