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
        Schema::create('api_responses', function (Blueprint $table) {
            $table->id();
            $table->string("service_name", 50)->nullable(false)->comment("recharge,DMT,fund transfer,billpay ...");
            $table->string("service_type", 50)->nullable(false)->comment("prepaid,postpaid,verification,money transfer,credit/debit,landline,broadband ...");;
            $table->string("service_provider", 100)->nullable(false);
            $table->foreignId('transaction_id');
            $table->string('base_url', 100)->nullable(false);
            $table->string('method', 10)->nullable(false);
            $table->string('path', 100)->nullable(false);
            $table->text('response_data')->nullable(false);
            $table->text('request_data')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->index('transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_responses');
    }
};
