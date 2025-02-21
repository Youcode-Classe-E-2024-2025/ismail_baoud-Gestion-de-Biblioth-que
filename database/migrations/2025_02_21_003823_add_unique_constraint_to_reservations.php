<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            if (!DB::table('pg_constraint')
                ->where('conname', 'reservations_user_id_book_id_unique')
                ->exists()) {
                $table->unique(['user_id', 'book_id']);
            }

        });
    }

    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropUnique(['user_id', 'book_id']);
        });
    }
};

