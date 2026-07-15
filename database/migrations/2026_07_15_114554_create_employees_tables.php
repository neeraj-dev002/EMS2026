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
        Schema::create('employees_tables', function (Blueprint $table) {
         $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("phone")->unique();
            $table->string("gender");
            $table->string("department");
            $table->string("position");
            $table->date("joining_date");
            $table->boolean("status")->default(true);
            $table->string("address"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_tables');
    }
};
