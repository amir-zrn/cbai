<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('package_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('package_conditions');
    }
};
