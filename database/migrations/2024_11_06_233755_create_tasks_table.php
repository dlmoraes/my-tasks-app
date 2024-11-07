<?php

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("tasks", function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->text("description");
            $table->json("companies")->nullable();
            $table->string("status", 15)->default("open");
            $table->dateTime("ends_at")->nullable();
            $table->dateTime("closed_on")->nullable();
            $table->unsignedTinyInteger("is_accepted")->nullable();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Service::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("tasks");
    }
};
