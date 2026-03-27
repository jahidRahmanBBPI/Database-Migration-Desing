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
        Schema::create('column_type_part_two_new', function (Blueprint $table) {
            // Working With Column Types
            $table->id();
            $table->float('dollar');
            // $table->geometryCollection('positions'); // this is not working.
            $table->geometry('positions_2');
            $table->integer('population');
            $table->ipAddress('visitor');
            $table->json('user_details');
            $table->longText('blog_post');
            $table->timestamps();
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
