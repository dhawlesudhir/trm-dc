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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("own_ref_number", 50)->comment("internal unique id to refer at service provider side");
            $table->string("service_provider_ref_number", 100)->comment("unique id provided by service provider");
            $table->string("mobile_account", 50)->comment("mobile/account/landline number");
            $table->foreignIdFor(Service::class);
            $table->decimal("amount", 8, 2);
            $table->string("customer_name", 30)->nullable(true)->comment("customer name for user reference and should be masked display");
            $table->decimal("commission", 8, 2)->comment("service.commission of amount");
            $table->decimal("sp_commission", 8, 2)->comment("service.comm_origin of amount");
            $table->decimal("sp_bal", 8, 2)->comment("balance at SP side");
            $table->foreignId("status_id");
            $table->string("description")->nullable(true)->comment("internal use");
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
        Schema::dropIfExists('transactions');
    }
};
