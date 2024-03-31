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
        Schema::create('detail_teams', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['software','hardware']);
            $table->string('name_team');
            $table->string('name_app');
            $table->string('institution');
            $table->string('email')->unique();
            $table->string('name_member1');
            $table->string('phone_member1');
            $table->string('name_member2')->nullable();
            $table->string('phone_member2')->nullable();
            $table->string('link_project')->nullable();
            $table->dateTime('approved_project')->nullable();
            $table->string('payment_photo')->nullable();
            $table->dateTime('approved_payment')->nullable();
            $table->bigInteger('participant_id')->unsigned();
            $table->foreign('participant_id')->references('id')->on('participants');
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
        Schema::dropIfExists('detail_teams');
    }
};
