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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // خليه لأنه ممكن تحتاجي تفعّلي الإيميل مستقبلاً
            $table->string('password');
            $table->enum('role', ['admin', 'owner', 'customer'])->default('customer');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken(); // خليه، مفيد للـ login sessions
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
