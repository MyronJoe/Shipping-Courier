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
        Schema::create('utilities', function (Blueprint $table) {
            $table->id();
            $table->text('top_logo')->nullable();
            $table->text('logo_pic')->nullable();
            $table->text('fav_icon')->nullable();
            $table->text('footer_note')->nullable();
            $table->text('address')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('mail')->nullable();
            $table->text('twitter')->nullable();
            $table->text('facebook')->nullable();
            $table->text('youtube')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('site_name')->nullable();
            $table->text('year')->nullable();
            $table->text('title')->nullable();
            $table->text('key_word')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('utilities');
    }
};
