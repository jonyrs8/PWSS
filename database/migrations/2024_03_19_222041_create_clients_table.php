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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('invoice_address');
            $table->string('invoice_zip_code');
            $table->string('invoice_locality');
            $table->string('delivery_address');
            $table->string('delivery_zip_code');
            $table->string('delivery_locality');
            $table->string('telephone',20);
            $table->string('vat_number',20);
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
