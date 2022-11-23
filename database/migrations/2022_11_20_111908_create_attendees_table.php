<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('train_id')->constrained('trains');
            $table->string('company');
            $table->string('age');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('occupation');
            $table->string('team_status');
            $table->text('info_before');
            $table->text('response_description');
            $table->text('info_after');
            $table->string('time');
            $table->string('learn_mode');
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
        Schema::dropIfExists('attendees');
    }
}
