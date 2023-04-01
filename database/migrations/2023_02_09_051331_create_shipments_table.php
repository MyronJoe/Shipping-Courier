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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            
            $table->string('senderName');
            $table->string('senderEmail');
            $table->string('senderAddress');

            $table->string('receiverName')->nullable();
            $table->string('receiverEmail')->nullable();
            $table->string('receiverCountry')->nullable();
            $table->string('receiverAddress')->nullable();
            $table->string('receiverPhone')->nullable();

            $table->string('shippingType')->nullable();
            $table->string('weight')->nullable();
            $table->string('product')->nullable();
            $table->string('trackingID')->nullable();
            $table->string('comment')->nullable();
            $table->string('origin')->nullable();
            $table->string('quality')->nullable();
            $table->string('departDate')->nullable();
            $table->string('pickupDate')->nullable();
            $table->string('status')->nullable();
            $table->string('destination')->nullable();

            $table->string('ref_no')->nullable();
            $table->string('invoice_no')->nullable();

            $table->text('deliverd')->nullable();
            $table->text('payment_method')->nullable();
            $table->text('payment_status')->nullable();
            $table->text('amount')->nullable();

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
        Schema::dropIfExists('shipments');
    }
};
