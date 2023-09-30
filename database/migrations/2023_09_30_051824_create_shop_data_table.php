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
        Schema::create('shop_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('user_status');

            $table->string('shop_code')->unique()->nullable();
            $table->string('shop_name');
            $table->unsignedBigInteger('shop_product_type_id');
            $table->string('shop_contact');
            $table->string('shop_post_code');
            $table->string('shop_province');
            $table->string('shop_district');
            $table->string('shop_subdistrict');
            $table->string('shop_detail_address');
            $table->unsignedBigInteger('shop_area_code_id')->nullable();
            $table->string('shop_tel');
            $table->string('shop_fax');
            $table->string('shop_email');
            $table->text('shop_remark')->default('-');

            $table->float('shop_latitude')->nullable()->nullable();
            $table->float('shop_longitude')->nullable()->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shop_product_type_id')->references('id')->on('product_type_data');
            $table->foreign('shop_area_code_id')->references('id')->on('area_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_data');
    }
};
