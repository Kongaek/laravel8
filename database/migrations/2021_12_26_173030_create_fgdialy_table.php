<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgdialyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fgdialy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('pro_id')->nullable();
            $table->string('pro_name')->nullable();
            $table->float('price')->nullable();
            $table->date('mfg')->nullable();
            $table->string('qnt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fgdialy');
    }
}
