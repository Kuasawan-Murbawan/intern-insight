<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->timestamps();
            $table->string('companyID')->primary();
            $table->string('name');
            $table->string('sector');
            $table->unsignedInteger("employees");
            $table->string('location');
            $table->string('website');
            $table->unsignedInteger('reviews')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
