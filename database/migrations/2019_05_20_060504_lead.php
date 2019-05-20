<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lead extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_lead',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('client_id')->unsigned()->default(0);
            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            $table->float('budget')->default(0);
            $table->integer('budget_currency')->default(0);
            $table->integer('beds')->default(0);
            $table->integer('projects')->default(0);
            $table->integer('source')->default(0);
            $table->integer('purpose')->default(0);
            $table->integer('payment_mode')->default(0);
            $table->integer('land_area')->default(0);
            $table->integer('type')->default(0);
            $table->integer('sub_type')->default(0);
            $table->text('messages');
            $table->text('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_lead');
    }
}
