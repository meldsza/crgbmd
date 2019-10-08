<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('affiliation');
            $table->string('email')->unique();
            $table->string('designation');
            $table->string('position');
            $table->string('committe');
            $table->mediumText('photo')->nullable();
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
        Schema::dropIfExists('committee');
    }
}