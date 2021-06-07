<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->bigInteger('follower')->unsigned();
            $table->bigInteger('following')->unsigned();
            $table->timestamp('created_at')->default(CURRENT_TIMESTAMP);
        });

        Schema::table('follow', function (Blueprint $table) {
            $table->primary(['follower', 'following']);
            $table->foreign('follower')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->foreign('following')
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
        Schema::dropIfExists('follow');
    }
}
