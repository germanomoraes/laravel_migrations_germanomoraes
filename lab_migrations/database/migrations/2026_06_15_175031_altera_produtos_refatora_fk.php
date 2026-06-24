<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Removemos a chave e a coluna antigas
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
        });

        // 2. Recriamos usando a sintaxe moderna simplificada
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreignId('categoria_id')->constrained('categorias');
        });
    }

    public function down(): void
    {
        // Desfaz a alteração, voltando para o jeito "manual"
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
};
