<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('account_assurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('assurance_operation_id');
            $table->foreignId('assurance_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('account_assurances');
    }
};
