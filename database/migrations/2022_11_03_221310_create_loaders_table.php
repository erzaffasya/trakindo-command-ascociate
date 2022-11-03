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
        Schema::create('loaders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_loader');
            $table->string('oru');
            $table->string('aecm');
            $table->string('rsm')->nullable();
            $table->string('bsm')->nullable();
            $table->string('rear_ladar');
            $table->string('front_ladar');
            $table->boolean('isShow');
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
        Schema::dropIfExists('loaders');
    }
};
