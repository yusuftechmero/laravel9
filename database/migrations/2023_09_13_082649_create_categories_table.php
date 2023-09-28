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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('category_type')->comment('1=category,2=text')->nullable();
            $table->json('category_name')->nullable();
            $table->json('sort_desc')->nullable();
            $table->text('icon')->nullable(); // Add the icon field
            $table->json('questions')->nullable(); // Add the question field
            $table->json('prompt')->nullable();
            $table->integer('status')->default(1);
            $table->integer('prompt_role')->comment('1=system,2=user,3=assistant')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
