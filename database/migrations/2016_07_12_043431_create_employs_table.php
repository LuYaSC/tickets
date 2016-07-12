<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->string('position');
            $table->date('birth_date');
            $table->string('address');
            $table->string('civil_status');
            $table->string('profession');
            $table->integer('CI');
            $table->string('nacionality');
            $table->string('blood_type');
            $table->integer('age');
            $table->string('emailcorpor')->unique();
            $table->enum('status',['f','m']);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('employs');
    }
}
