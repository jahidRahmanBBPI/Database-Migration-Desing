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
        Schema::create('column_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('email', length:50)->unique();
            $table->string('firstName', length:50);
            $table->string('lastName', length:50)->nullable();
            $table->string('country', 50)->default('Bangladesh');
            $table->timestamp('create_data')->useCurrent();
            $table->timestamp('update_date')->useCurrent()->useCurrentOnUpdate();
            $table->string('pinCode', 50)->default('abc')->invisible();

            // php artisan migrate:reset (to delete created all table).
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
