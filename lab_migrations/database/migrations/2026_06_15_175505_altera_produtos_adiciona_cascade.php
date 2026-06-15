<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            // Remove a restrição antiga e adiciona a nova com a regra cascade
            $table->dropForeign(['categoria_id']);
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            // Desfaz a alteração, removendo a regra cascade para garantir um rollback seguro
            $table->dropForeign(['categoria_id']);
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
};
