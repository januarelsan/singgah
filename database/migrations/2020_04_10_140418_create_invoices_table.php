<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();                                    
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->string('code')->nullable();                                    
            $table->text('outputURL')->nullable();            
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');            
            $table->foreign('coupon_id')->references('id')->on('coupons');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
