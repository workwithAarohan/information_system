<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTextToEnglishInContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
            $table->renameColumn('location', 'location_en');
            $table->renameColumn('contact_no', 'contact_en');
            $table->renameColumn('helpline_no', 'helpline_en');
            $table->renameColumn('working_time', 'working_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
            $table->renameColumn('location_en', 'location');
            $table->renameColumn('contact_en', 'contact_no');
            $table->renameColumn('helpline_en', 'helpline_no');
            $table->renameColumn('working_en', 'working_time');

        });
    }
}
