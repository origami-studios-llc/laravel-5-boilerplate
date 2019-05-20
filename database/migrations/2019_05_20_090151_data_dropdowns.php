<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataDropdowns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_project',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('data_source',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_payment_mode',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_land_area',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_budget_currency',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_property_type',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_property_sub_type',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_property_purpose',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_client_interest',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_client_type',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_client_sub_type',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_client_rating',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_location',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_next_task',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_task_type',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_task_sub_type',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_meeting_location',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('data_lead_classification_temperature',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
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
        Schema::dropIfExists('data_project');
        Schema::dropIfExists('data_source');
        Schema::dropIfExists('data_payment_mode');
        Schema::dropIfExists('data_land_area');
        Schema::dropIfExists('data_budget_currency');
        Schema::dropIfExists('data_property_type');
        Schema::dropIfExists('data_property_sub_type');
        Schema::dropIfExists('data_property_purpose');
        Schema::dropIfExists('data_client_interest');
        Schema::dropIfExists('data_client_type');
        Schema::dropIfExists('data_client_sub_type');
        Schema::dropIfExists('data_client_rating');
        Schema::dropIfExists('data_location');
        Schema::dropIfExists('data_next_task');
        Schema::dropIfExists('data_task_type');
        Schema::dropIfExists('data_task_sub_type');
        Schema::dropIfExists('data_meeting_location');
        Schema::dropIfExists('data_lead_classification_temperature');
    }
}
