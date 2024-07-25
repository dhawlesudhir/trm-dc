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
        Schema::create('fund_transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->comment("requestor");
            $table->foreignId('approver_id')->comment("approval or request send to");
            $table->string('fund_type')->comment("paid,credit,partial paid,cash deposit,online transferred");
            $table->decimal('amount', 15, 2)->comment("required amount");
            $table->decimal('paid_amt', 15, 2)->default(0)->comment("if partial type, amount paid for request");
            $table->string('amt_paid_to')->nullable(true)->comment("actual amount handover to person/medium/via");
            $table->string('ref_number')->nullable(true)->comment("if online transfer");
            $table->string('bank_account_number', 50)->nullable(true)->comment("if transfer to bank");
            $table->string('bank_name', 50)->nullable(true)->comment("if transfer to bank");
            $table->string('IFSC', 15)->nullable(true)->comment("if transfer to bank");
            $table->dateTime('paid_on')->nullable(true)->comment("actual date of payment by requestor");
            $table->dateTime('received_on')->nullable(true)->comment("date of receipt by approval");
            $table->string('description', 100)->nullable(true)->comment("by approval");
            $table->foreignId('status_id')->comment("requested,rejected,approved,onhold");
            $table->foreignId('approver')->nullable(true)->comment("by admin/system/employee");
            $table->string('approver_ref_number')->nullable(true)->comment("approver ref number, if any");
            $table->string('internal_description', 100)->nullable(true)->comment("by admin/system/employee");
            $table->dateTime('approved_on')->nullable(true)->comment("date of receipt by approval");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_transfer');
    }
};
