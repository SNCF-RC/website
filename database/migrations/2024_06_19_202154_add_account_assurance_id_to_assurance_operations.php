<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('assurance_operations', function (Blueprint $table) {
            $table->foreignId('account_assurance_id');
        });
    }

    public function down(): void
    {
        Schema::table('assurance_operations', function (Blueprint $table) {
            //
        });
    }
};
