<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('users', function (Blueprint $table) {
        $table->renameColumn('name', 'username');
        $table->string('username')->unique()->change();
        $table->string('first_name', 50);
        $table->string('last_name', 50);
        $table->integer('age');
        $table->text('signature');
        $table->string('city', 50);
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
};
