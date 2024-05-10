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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string("firsname");
            $table->string("name");
            $table->text("indic");
            $table->string("role");
            $table->integer("phone");
            $table->string("email");
            $table->date("birth_date");
            $table->string("adress");
            $table->integer("zip_code");
            $table->string("city");
            $table->string("country");
            $table->string("speakj");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
