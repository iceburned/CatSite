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
        Schema::create('cat_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 25);
            $table->text('description');
            $table->integer('height');
            $table->integer('weight');
            $table->text('characteristics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_infos');
    }
};
