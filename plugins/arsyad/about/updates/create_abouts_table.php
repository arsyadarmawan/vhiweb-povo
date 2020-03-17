<?php namespace Arsyad\About\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAboutsTable extends Migration
{
    public function up()
    {
        Schema::create('arsyad_about_abouts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arsyad_about_abouts');
    }
}
