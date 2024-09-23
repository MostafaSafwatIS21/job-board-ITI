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
        Schema::table('applications', function (Blueprint $table) {
            // Drop the existing foreign key constraint
            $table->dropForeign(['job_id']);

            // Change the foreign key reference
            $table->foreignId('job_id')->constrained('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['job_id']);

            // Revert to the previous foreign key reference
            $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade');
        });
    }
};
