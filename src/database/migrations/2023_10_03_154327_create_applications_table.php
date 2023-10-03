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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('dealer_name');
            $table->string('contact_person');
            $table->double('credit_amount', 8, 2);
            $table->double('interest_rate', 8, 2);
            $table->text('credit_reason');
            $table->text('status');
            $table->foreignId('bank_id')->constrained('banks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
