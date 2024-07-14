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
        Schema::create('users', function (Blueprint $table) {
            $table->comment('all users who can access application');
            $table->id();
            $table->string('first_name', 40)->nullable(false);
            $table->string('middle_name', 40)->nullable(true);
            $table->string('last_name', 50)->nullable(true);
            $table->date('dob')->nullable(true)->default(null)->comment('date of birth');

            $table->string('email', 60)->nullable(true)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile', 60)->unique();
            $table->string('login_id', 10)->unique();
            $table->tinyInteger('service_type')->default(2)->comment("1:admin, 2:retailer, 3:distributor");

            $table->string('password')->nullable(true);
            $table->rememberToken();

            $table->tinyInteger('status')->default(4)->comment('4:new(registration), 1:active(basic document verified), 2:inactive(blocked login - any reason), 3:De-active(blocked)');
            $table->string('refer_by')->nullable(false)->comment('other user or self/app/website or code');
            $table->foreignId('relationship_manager')->nullable(true)->default(null)->comment('dedicated from org persona, for help');
            //todo defined relationship
            $table->foreignId('distributor')->nullable(true)->default(null);
            $table->foreignId('subscription')->nullable(true)->default(null);
            $table->foreignId('address_id')->nullable(true)->default(null);
            $table->foreignId('kyc_id')->nullable(true)->default(null);


            $table->index('relationship_manager');
            $table->index('distributor');
            $table->index('address_id');
            $table->index('kyc_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
