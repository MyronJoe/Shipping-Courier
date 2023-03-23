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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->text('about_us')->nullable();
            $table->text('image')->nullable();
            $table->text('service_title')->nullable();
            $table->text('service_sub')->nullable();
            $table->text('feature_title')->nullable();
            $table->text('feature_sub')->nullable();
            $table->text('feature_image')->nullable();
            $table->text('test_title')->nullable();
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
        Schema::dropIfExists('headers');
    }
};
