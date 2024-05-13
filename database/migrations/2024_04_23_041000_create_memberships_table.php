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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('document_required')->nullable();
            $table->integer('membership_fee');
            $table->text('payment_procedure');
            $table->string('register_online_link')->nullable();
            $table->string('website_link')->nullable();
            $table->string('query_email')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
