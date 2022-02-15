<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsts', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->string('abrivation');
            $table->integer('price');
            $table->string('charge_code')->unique();
            $table->string('discription');              
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
        Schema::dropIfExists('tsts');
    }
}
