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
        Schema::create('event_prods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('discription');
            $table->string('event_path');
            $table->string('date_start');
            $table->string('date_end');
            $table->rememberToken();
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
        Schema::dropIfExists('event_prod');
    }
};
