<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SecondUpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('age','128')->nullable()->after('identity_scan');
            $table->string('education')->nullable()->after('age');
            $table->string('eng_level')->nullable()->after('education');
            $table->string('eng_study')->nullable()->after('eng_level');
            $table->string('what_learn')->nullable()->after('eng_study');
            $table->string('availability')->nullable()->after('what_learn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
