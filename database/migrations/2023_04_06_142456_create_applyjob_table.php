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
        Schema::create('applyjob', function (Blueprint $table) {
            $table->id();
            $table->integer('jobID');
            $table->string('recruiter');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('resume');
            $table->text('coverletter');
            $table->timestamps();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applyjob');
    }
};
