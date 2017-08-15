<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('address');
            $table->integer('country_id');
            $table->string('email');
            $table->string('contact_no');
            $table->integer('education_level_id');
            $table->string('faculty');
            $table->integer('intrested_course_id');
            $table->integer('intrested_country_id');
            $table->boolean('married_status');
            $table->float('ielts')->nullable();
            $table->float('tofel')->nullable();
            $table->float('sat')->nullable();
            $table->float('gre')->nullable();
            $table->string('other_test')->nullable();
            $table->text('work_experience')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
