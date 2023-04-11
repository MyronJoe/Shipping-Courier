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
            $table->string('sender_contact')->nullable();

            $table->string('receiverName')->nullable();
            $table->string('receiverEmail')->nullable();
            $table->string('receiverAddress')->nullable();
            $table->string('receiverPhone')->nullable();

            $table->string('trackingID')->nullable();
            $table->string('departDate')->nullable();
            $table->string('pickupDate')->nullable();
            $table->string('status')->nullable();
            $table->string('current_location')->nullable();

            $table->string('ref_no')->nullable();
            $table->string('invoice_no')->nullable();

            $table->text('deliverd')->nullable();
            $table->text('package_description')->nullable();
            $table->text('dispatch_location')->nullable();

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
