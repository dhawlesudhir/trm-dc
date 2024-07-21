<?php

use App\Models\DmtCustomer;
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
        Schema::create('dmt_beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DmtCustomer::class);
            $table->string('name', 100);
            $table->string('mobile', 10);
            $table->foreignId('bank_id');
            $table->string('account_number', 100);
            $table->string('ifsc', 11)->comment("to use own IFSC");
            $table->boolean('verified')->default(false);
            $table->foreignIdFor(User::class);
            $table->decimal("amt", 10, 2)->comment("life amount");
            $table->softDeletes(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmt_beneficiaries');
    }
};
