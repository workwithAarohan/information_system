<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationDescsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_descs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title_en');
            $table->string('title_np');
            $table->string('desc_en');
            $table->string('desc_np');
            $table->string('file');


            $table->foreignId('information_id')
            ->constrained();
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
        Schema::dropIfExists('information_descs');
    }
}
