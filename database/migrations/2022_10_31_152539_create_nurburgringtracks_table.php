<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurburgringtracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurburgringtracks', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Horsepower');
            $table->string('Lap_Time');
            $table->string('Img_Url');
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurburgringtracks');
    }
}
