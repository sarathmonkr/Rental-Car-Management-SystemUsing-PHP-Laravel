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
        Schema::create('carmodel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('carname');
            $table->string('carprice');
            $table->string('carseats');
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carmodel');
    }
};
