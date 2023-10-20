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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('role')->default('user');
            $table->string('email');
            $table->string('contact_no')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passcode')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('packege_id');
            $table->bigInteger('salary')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
