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

            $table->string('receiverName');
            $table->string('receiverEmail');
            $table->string('receiverCountry');
            $table->string('receiverAddress');
            $table->string('receiverPhone');

            $table->string('shippingType');
            $table->string('weight');
            $table->string('product');
            $table->string('trackingID');
            $table->string('comment');
            $table->string('origin');
            $table->string('quality');
            $table->string('departDate');
            $table->string('pickupDate');
            $table->string('status');
            $table->string('destination');

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
