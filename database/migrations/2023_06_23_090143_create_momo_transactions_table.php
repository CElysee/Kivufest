<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('momo_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->string('ticket_id');
            $table->string('transaction_id');
            $table->string('status');
            $table->string('assigned_id');
            $table->string('company_name');
            $table->string('code');
            $table->string('amount');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('payment_code');
            $table->string('external_payment_code');
            $table->string('payment_status');
            $table->string('payment_type');
            $table->string('momo_deleted_at');
            $table->string('momo_created_at');
            $table->string('momo_updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('momo_transactions');
    }
};
