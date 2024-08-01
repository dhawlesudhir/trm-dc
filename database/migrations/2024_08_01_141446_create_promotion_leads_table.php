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
        Schema::create('promotion_leads', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 40)->nullable(false);
            $table->string('middle_name', 40)->nullable(true);
            $table->string('last_name', 50)->nullable(true);
            $table->string("homeShopNumberOrName", 50)->nullable(true);
            $table->string('email', 60)->nullable(true)->unique();
            $table->string('interest', 30)->nullable(true);
            $table->string('mobile', 12)->unique();
            $table->json('notes')->nullable(true)->comment("json data emp_id:notes");
            $table->boolean('DND')->default(false);
            $table->tinyInteger('status_id')->comment('positive, negative, unresponsive, new');
            $table->string('source', 50)->nullable(true);
            $table->foreignIdFor(User::class)->nullable(true);
            $table->foreignId('employee_id')->nullable(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_leads');
    }
};
