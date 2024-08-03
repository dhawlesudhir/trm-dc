<?php

use App\Models\User;
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
        Schema::create('data_links', function (Blueprint $table) {
            $table->uuid();
            $table->foreignIdFor(User::class);
            $table->string('title', 30);
            $table->string('description', 50);
            $table->string('url_or_path');
            $table->string('provider', 20);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_links');
    }
};
