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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // FK from users table
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->string('company_website')->nullable();
            $table->text('company_description')->nullable();
            $table->enum('categories', [
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
            $table->string('company_email')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
