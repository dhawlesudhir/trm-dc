<?php

use App\Models\Service;
use App\Models\Transaction;
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
        Schema::create('ledgers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Transaction::class)->comment("id frim transaction/fund_tranfer/...");
            $table->string("type", 10)->comment("amount is 'debit', 'credit' - debited or credited");
            $table->decimal("amount", 8, 2)->comment("transaction amount");
            $table->decimal("balance", 8, 2)->comment("balance after transaction");
            $table->foreignIdFor(Service::class)->comment("details of transaction like account,name ...");
            $table->string("description")->comment("details of transaction like account,name,refunded ...");
            $table->decimal("commission", 8, 2)->comment("commission or charges of transaction");
            $table->dateTime('transaction_on')->comment("datetime from transaction/dmt_transaction");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ledgers');
    }
};
