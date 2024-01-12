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
        Schema::create('reviews', function (Blueprint $table) {
            $table->timestamps();
            $table->string('userID');
            $table->string('reviewID')->primary();
            $table->unsignedInteger('overallRating');
            $table->string('jobTitle');
            $table->unsignedInteger('allowance');
            $table->string('review');
            $table->string('tips');

            $table->string('companyID');
            $table->foreign('companyID')
                ->references('companyID')
                ->on('companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
