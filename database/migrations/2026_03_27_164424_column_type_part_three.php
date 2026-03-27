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
        Schema::create('column_type_part_three', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->mediumInteger('coll_1');
            $table->mediumText('coll_2');
            $table->smallInteger('coll_3');
            $table->string('col_4', length:1000);
            $table->time('col_5');
            $table->timestamp('col_6');
            $table->tinyInteger('col_7');
            $table->unsignedBigInteger('col_8');
            $table->unsignedInteger('col_9');
            $table->text('col_10');
            $table->unsignedMediumInteger('col_11');
            $table->unsignedTinyInteger('col_12');
            $table->unsignedSmallInteger('col_13');
            $table->tinyText('col_14');
            // $table->timestamp();
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
