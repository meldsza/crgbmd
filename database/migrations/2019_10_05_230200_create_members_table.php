<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->date('dob');
            $table->string('gender');
            $table->text('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('email')->unique();
            $table->bigInteger('mblno')->unique();
            $table->text('company-add');
            $table->text('designation');
            $table->text('Additional-Info');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
