<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionAskedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionasked', function (Blueprint $table) {
            $table->id();
            $table->foreignId('train_id')->constrained('trains')->nullable();
            $table->text('question');
            $table->string('name');
            $table->string('company');
            $table->string('trainer_name');
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
        Schema::dropIfExists('questionasked');
    }
}
