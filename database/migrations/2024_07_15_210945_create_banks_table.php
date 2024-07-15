<?php

use App\Models\Service;
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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string("bank_name", 50)->nullable(false)->default('');
            $table->string("bank_name_short", 10)->nullable(false)->default('');
            $table->string("bank_code", 30)->nullable(false)->default('');
            $table->string("IFSC", 15)->nullable(false)->default('');

            $table->boolean("IMPS")->default(1);
            $table->boolean("NEFT")->default(1);;
            $table->boolean("RTGS")->default(1);;

            $table->boolean('active')->default(1)->comment("true(working), false(down)");
            // $table->foreignIdFor(Service::class);
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('service_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
