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
        Schema::create('jobrecruitment', function (Blueprint $table) {
            $table->id();
            $table->string('recruiter');
            $table->string('jobname');
            $table->string('city');
            $table->string('salary');
            $table->string('type');
            $table->string('experience');
            $table->string('remoteworking');
            $table->text('desc');
            $table->timestamps();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobrecruitment');
    }
};
