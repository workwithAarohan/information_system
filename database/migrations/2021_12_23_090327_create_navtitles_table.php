<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavtitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navtitles', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('engfirsttitle');
            $table->string('engsecondtitle');
            $table->string('engthirdtitle');
            $table->string('fourthtitle');
            $table->string('flag');
            $table->string('nepfirsttitle');
            $table->string('nepsecondtitle');
            $table->string('nepthirdtitle');
            $table->string('bgimage');
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
        Schema::dropIfExists('navtitles');
    }
}
