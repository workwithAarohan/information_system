<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recentposts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title_en');
            $table->string('title_np');
            $table->string('photo');
            $table->text('description_en');
            $table->text('description_np');
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
        Schema::dropIfExists('recentposts');
    }
}
