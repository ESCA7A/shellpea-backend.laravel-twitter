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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('header')->nullable();
            $table->text('content');
            $table->string('email')->default('test@test.dev');
            $table->unsignedBigInteger('likes')->nullable();
            $table->timestamps();

            /**
             * soft delete trait
             */
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
};
