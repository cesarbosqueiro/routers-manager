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
        Schema::create('integrations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->enum('software', ['IXC', 'MK-Auth']);
            $table->string('url')->nullable();
            $table->string('token')->nullable();
            $table->string('secret')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('database')->nullable();
            $table->string('synchronized_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integrations');
    }
};
