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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->comment("commission plans");
            $table->uuid('id');
            $table->string("plan_name")->default('base')->comment("base, medium, super, prime");
            $table->string("service_name")->comment("service->service_name");
            $table->string("operator_or_bank");
            $table->decimal("commission", 8, 2)->default(00.0)->nullable(false);
            $table->set("com_type", ['%', 'fixed'])->default('%')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
