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
        Schema::create('services', function (Blueprint $table) {
            $table->comment("all services and service providers");
            $table->id();
            $table->string("service_name", 50)->nullable(false)->comment("recharge,DMT,fund transfer,billpay ...");
            $table->string("service_code", 10)->nullable(false)->comment("can use to identify service");
            $table->string("service_desc", 100)->nullable(false)->comment('about service');
            $table->string("service_type", 50)->nullable(false)->comment("prepaid,postpaid,verification,money transfer,credit/debit,landline,broadband ...");;
            $table->string("service_provider", 100)->nullable(false);
            $table->string("operator_or_bank_name", 50)->nullable(false);
            $table->string("operator_desc", 100)->nullable(false)->comment('about operator or bank');
            $table->set("active", ["true", "false"])->default("false")->nullable(false);
            $table->string("service_provider_code", 50)->nullable(false)->comment("provided by Service_provider");

            $table->decimal("commission", 8, 2)->default(00.0)->nullable(false);
            $table->set("com_type", ['%', 'fixed'])->default('%')->nullable(false);
            $table->decimal("com_origin", 8, 2)->default(00.0)->nullable(false);

            //todo:relation with Subscription
            $table->foreignUuid("subscription_id")->nullable(true);
            // $table->foreignUuid("subscription_id")->nullable(true);

            $table->boolean('backup')->default(false)->nullable(false)->comment("if all service_provider failed Then finally use backup SP");
            $table->boolean('alternative')->default(false)->nullable(false)->comment("if ACTIVE service_provider failed Then use alternative SP");

            $table->string("handler", 100)->nullable(true);

            $table->softDeletes();
            $table->timestamps();

            //todo: make login to achieve composite key or uniqueness combined [service_name,operator/bank,active(true)]
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
