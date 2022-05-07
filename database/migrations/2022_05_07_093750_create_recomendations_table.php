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
        Schema::create('recomendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id');
            $table->string('message')->nullable();
            $table->integer('status')->default(0)->comment('0:pending, 1:accepted, 2:rejected');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_recomendation')->comment('0: request, 1: recomendation');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sender_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('receiver_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recomendations');
    }
};
