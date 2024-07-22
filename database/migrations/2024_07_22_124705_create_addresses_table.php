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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("homeShopNumberOrName");
            $table->string("building_name")->nullable(true);
            $table->string("area_name");
            $table->string("landmark")->nullable(true);
            $table->string("city_village", 30);
            $table->string("state", 30);
            $table->string("postalCode", 10);
            $table->string("addressType")->default('other')->comment("Home/Office/Shop/other");
            $table->string("region")->nullable(true)->comment("south, north,east,west");
            $table->boolean("active")->default(0)->comment("only last added will be active");
            $table->boolean("verified")->default(0)->comment("address is verified,using manual or automatic");
            $table->string("verified_by")->nullable(true)->comment("address is verified by employee or auto process");
            $table->string("description", 100)->nullable(true)->comment("internal use");
            $table->string("coordinates")->nullable(true)->comment("google map location coordinates");
            $table->foreignId("kyc_id")->nullable(true)->comment("to link documents");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
