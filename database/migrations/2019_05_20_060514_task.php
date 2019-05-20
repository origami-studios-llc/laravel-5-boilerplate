<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_lead_task',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('lead_id')->unsigned()->default(0);
            $table->foreign('lead_id')->references('id')->on('client_lead')->onDelete('cascade');
            $table->integer('type')->default(0);
            $table->integer('sub_type')->default(0);
            $table->integer('location')->default(0);
            $table->string('attachment')->nullable();
            $table->integer('purpose')->default(0);
            $table->integer('payment_mode')->default(0);
            $table->integer('land_area')->default(0);
            $table->dateTime('completed_at')->nullable();
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
        Schema::dropIfExists('client_lead_task');
    }
}
