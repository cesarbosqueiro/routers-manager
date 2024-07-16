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
        Schema::create('routers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->ipAddress('ipv4');
            $table->ipAddress('ipv6')->nullable();
            $table->string('username')->default('root');
            $table->string('password');
            $table->string('secret_radius')->nullable();
            $table->string('port')->default(22);
            $table->enum('type', ['TELNET', 'SSH', 'API']);
            $table->string('vendor')->nullable();
            $table->string('model')->nullable();
            $table->string('firmware')->nullable();
            $table->string('software')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routers');
    }
};
