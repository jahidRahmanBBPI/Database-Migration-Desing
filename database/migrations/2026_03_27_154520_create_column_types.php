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
        Schema::create('column_types', function (Blueprint $table) {
            // Working With Column Types
            $table->bigIncrements('id');
            $table->boolean('is_bangladeshi');
            $table->bigInteger('Vote');
            $table->binary('photo');
            $table->char('name', length:50);
            $table->dateTime('voting__date_time');
            $table->date('voting_date');
            $table->double('population');
            $table->enum('group',['A', 'B']);
            $table->timestamps();

            // Working With Column Types
            // $table->id();
            // $table->float('dollar');
            // $table->geometryCollection('positions'); // this is not working.
            // $table->geometry('positions_2');
            // $table->integer('population');
            // $table->ipAddress('visitor');
            // $table->json('user_details');
            // $table->longText('blog_post');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('column_types');
    }
};
