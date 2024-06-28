<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('bank_operations', function (Blueprint $table) {
            $table->foreignId('account_bank_id');
        });
    }

    public function down(): void
    {
        Schema::table('bank_operations', function (Blueprint $table) {
            //
        });
    }
};
