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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade'); // Foreign key to employers table
            $table->string('job_title');
            $table->text('job_description');
            $table->json('requirements')->nullable();
            $table->enum('location', [
                'Cairo',
                'Alexandria',
                'Giza',
                'Port Said',
                'Suez',
                'Luxor',
                'Aswan',
                'Asyut',
                'Beheira',
                'Beni Suef',
                'Dakahlia',
                'Damietta',
                'Faiyum',
                'Gharbia',
                'Ismailia',
                'Kafr El Sheikh',
                'Minya',
                'Monufia',
                'New Valley',
                'Qalyubia',
                'Qena',
                'Red Sea',
                'Sharqia',
                'Sohag',
                'South Sinai',
                'North Sinai',
                'Matrouh',
            ])->nullable();
            $table->enum('work_type', ['Full-time', 'Part-time', 'Remote', 'Contract']);
            $table->string('salary_range')->nullable();
            $table->date('application_deadline')->nullable();
            $table->enum('job_category', [
                'Information Technology',
                'Healthcare',
                'Finance',
                'Education',
                'Manufacturing',
                'Retail',
                'Transportation',
                'Hospitality',
                'Construction',
                'Real Estate',
                'Telecommunications',
                'Agriculture',
                'Energy',
                'Entertainment',
                'Legal Services',
                'Marketing and Advertising',
                'Non-Profit',
                'Public Sector',
                'Professional Services',
                'Consulting',
                'Media',
                'Automotive',
                'Pharmaceuticals',
                'Aerospace',
                'Environmental Services',
                'Logistics and Supply Chain',
                'Human Resources',
                'E-commerce',
                'Food and Beverage',
                'Sports and Recreation',
            ])->nullable();
            $table->json('keywords')->nullable();  // Keywords for improved search
            $table->enum('experience_level', ['Junior', 'Mid', 'Senior', 'Lead']);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // admin who approved
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
