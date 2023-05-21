<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpowermentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empowerments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('email')->unique();
            $table->text('description');
            $table->string('qualification');
            $table->string('category');
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
        Schema::dropIfExists('empowerments');
    }
}
