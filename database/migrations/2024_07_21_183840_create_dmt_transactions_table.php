<?php

use App\Models\Service;
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
        Schema::create('dmt_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("own_ref_number", 50)->comment("internal unique id to refer at service provider side");
            $table->foreignIdFor(Service::class);
            $table->string("service_provider_ref_number", 100)->comment("unique id provided by service provider");
            $table->foreignId("customer_id")->comment("MtCustomer.id");
            $table->foreignId("beneficiary_id")->comment("MtBeneficiary.id");
            $table->string("description", 100)->nullable(true)->comment("transaction description/narration by customer");
            $table->string("mode")->comment("IMPS,NEFT,RTGS etc");

            $table->decimal("amount", 8, 2);
            $table->decimal("customer_amount", 8, 2)->nullable(true)->comment("if any charges");
            $table->decimal("gst_amount", 8, 2)->nullable(true);
            $table->decimal("commission", 8, 2)->comment("service.commission of amount");
            $table->decimal("sp_commission", 8, 2)->comment("service.comm_origin of amount");
            $table->decimal("sp_bal", 8, 2)->comment("balance at SP side");

            $table->string("internal_description", 100)->nullable(true)->comment("internal use");

            $table->foreignId("status_id");

            $table->ipAddress("ip")->nullable(true)->comment("IP of request");
            $table->timestamp("refund_at")->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmt_transactions');
    }
};
