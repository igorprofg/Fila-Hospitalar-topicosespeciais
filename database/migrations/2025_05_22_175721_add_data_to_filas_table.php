<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('filas', function (Blueprint $table) {
            $table->date('data')->after('status'); // ou 'after' outro campo se preferir
        });
    }

    public function down(): void
    {
        Schema::table('filas', function (Blueprint $table) {
            $table->dropColumn('data');
        });
    }
};
