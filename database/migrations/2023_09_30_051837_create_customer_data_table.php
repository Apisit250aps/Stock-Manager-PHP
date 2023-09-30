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
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('user_status');
            $table->string('customer_code')->unique();
            $table->string('customer_name');
            $table->string('customer_post_code');
            $table->string('customer_province');
            $table->string('customer_district');
            $table->string('customer_subdistrict');
            $table->string('customer_detail_address');
            $table->string('customer_tel');
            $table->string('customer_fax');
            $table->string('customer_email');
            $table->text('customer_remark')->default('-');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_data');
    }
};
