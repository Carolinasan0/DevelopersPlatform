<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecluitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recluiters', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('vacancy_id');

            $table->string('company');
            $table->longtext('description');
            $table->string('website');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on("users")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recluiters');
    }
}
