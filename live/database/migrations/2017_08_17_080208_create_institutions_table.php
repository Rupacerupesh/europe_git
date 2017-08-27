<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('address');
            $table->string('logo');
            $table->string('banner');
            $table->string('funding_type');
            $table->string('institution_type');
            $table->string('estd_year');
            $table->string('student_no');
            $table->string('schoolarship');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('short_intro');
            $table->text('information');
            $table->boolean('status');
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
        Schema::dropIfExists('institutions');
    }
}
