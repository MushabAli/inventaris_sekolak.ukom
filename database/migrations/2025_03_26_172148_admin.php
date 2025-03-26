<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $table='admin';
    public function up(): void
    {
        Schema::create($this->table, function(Blueprint $table){
            $table->integer('id_admin',true,false)->nullable(false);
            $table->string('username',200)->nullable(false);
            $table->text('password')->nullable(false);
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
