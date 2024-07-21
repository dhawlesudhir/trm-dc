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
        Schema::create('dmt_customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 40);
            $table->string('middle_name', 40);
            $table->string('last_name', 50);
            $table->string('mobile', 10);
            $table->string('address');
            $table->foreignId('kyc_id')->nullable(true);
            $table->decimal('transaction_limit', 8, 2)->default('25000');
            $table->foreignIdFor(User::class);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmt_customers');
    }
};
