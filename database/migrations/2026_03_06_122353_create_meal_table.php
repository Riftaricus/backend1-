<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->double("price");
            $table->text("description");
            $table->timestamps();
        });
        Schema::create('ordered_meals', function (Blueprint $table) {
            $table->id();
            $table->foreignId("meal_id")->references("id")->on("meals");
            $table->foreignId("user_id")->references("id")->on("users");
            $table->string("status")->default("Pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
        Schema::dropIfExists('ordered_meals');
    }
};
