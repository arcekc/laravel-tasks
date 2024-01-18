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
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            // Drop the primary key if it exists
            $table->dropPrimary(['email']);

            // Define columns
            // $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        // Add a new temporary primary key
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->increments('id')->first();
        });

        // Drop the existing primary key
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->dropPrimary(['email']);
        });

        // Drop the temporary primary key
        Schema::table('password_reset_tokens', function (Blueprint $table) {
            $table->dropColumn('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
    }
};
