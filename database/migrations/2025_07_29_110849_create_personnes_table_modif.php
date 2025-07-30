<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('cd_id')->index();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('ccp');
            $table->integer('cle');
            //$table->float('montant');
            $table->timestamps();

            //$table->foreign('cd_id')->references('id')->on('cds')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
