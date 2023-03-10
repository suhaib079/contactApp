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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name')->default(100);
            $table->string('company')->default(100);
            $table->string('phone_number')->default(100);
            $table->string('addres')->default(100);
            $table->string('job_title')->default(100);
            $table->double('salary', 6, 2)->default(100);
            $table->string('join_date')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
