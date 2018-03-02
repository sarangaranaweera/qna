<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('password');
            $table->string('last_name')->after('password');
            $table->string('website')->after('password');
            $table->text('about_me')->after('password');
            $table->string('facebook')->after('password');
            $table->string('twitter')->after('password');
            $table->string('linkedin')->after('password');
            $table->string('google_plus')->after('password');
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
