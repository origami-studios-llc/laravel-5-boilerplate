<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client',function (Blueprint $table){

                $table->bigIncrements('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->text('address')->nullable();
                $table->string('city')->nullable();
                $table->string('state')->nullable();
                $table->string('zipcode')->nullable();
                $table->string('country')->nullable();
                $table->string('fax')->nullable();
                $table->integer('interests')->default(0);
                $table->integer('type')->default(0);
                $table->integer('rating')->default(0);
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
        Schema::dropIfExists('client');
    }
}
