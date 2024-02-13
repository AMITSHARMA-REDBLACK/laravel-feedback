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
        schema::create('feedback_student',function(Blueprint $table){

            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('rateing')->nullable();

        });
        //
    }

    /**Insert keysInsert keys
     * Reverse the migrations.
     */
    public function down(): void
    { schema::dropIfExists('feedback_student');
    }
};
