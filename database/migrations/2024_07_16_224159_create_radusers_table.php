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
        Schema::create('radusers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username')->unique();
            $table->timestamp('connectionStartAt');
            $table->timestamp('connectionEndAt')->nullable();
            $table->string('macAddress')->nullable();
            $table->string('ipAddress')->nullable();
            $table->string('nasIpAddress')->nullable();
            $table->string('nasPortId')->nullable();
            $table->string('nasPortType')->nullable();
            $table->string('serviceType')->nullable();
            $table->string('framedProtocol')->nullable();
            $table->string('framedIpAddress')->nullable();
            $table->string('framedIpv6Prefix')->nullable();
            $table->string('framedIpv6Pool')->nullable();
            $table->string('framedIpv6Address')->nullable();
            $table->string('framedIpv6Route')->nullable();
            $table->string('framedIpv6PrefixLength')->nullable();
            $table->string('framedIpv6InterfaceId')->nullable();
            $table->string('framedIpv6LocalPool')->nullable();
            $table->string('framedIpv6RemotePool')->nullable();
            $table->string('framedIpv6PrefixPool')->nullable();
            $table->string('framedIpv6PrefixRoute')->nullable();
            $table->string('framedIpv6PrefixLengthPool')->nullable();
            $table->string('framedIpv6PrefixInterfaceIdPool')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radusers');
    }
};
