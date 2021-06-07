<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloseFriendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('close_friend', function (Blueprint $table) {
            $table->bigInteger('user')->unsigned();
            $table->bigInteger('close_friend')->unsigned();
            $table->timestamp('created_at')->default(CURRENT_TIMESTAMP);
        });

        Schema::table('close_friend', function (Blueprint $table) {
            $table->primary(['user', 'close_friend']);
            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreign('close_friend')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('close_friend');
    }
}
