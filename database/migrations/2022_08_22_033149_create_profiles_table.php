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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('ssc_batch')->nullable();
            $table->string('last_degree')->nullable();
            $table->string('occupation')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('present_address')->nullable();
            $table->string('participant_qty')->nullable();
            $table->string('tShirt_size')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
