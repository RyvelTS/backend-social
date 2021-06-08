<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_comment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user')->unsigned();
            $table->bigInteger('comment')->unsigned();
            $table->tinyInteger('vote')->nullable();
            $table->timestamp('created_at')->default(CURRENT_TIMESTAMP);
        });

        Schema::table('vote_comment', function (Blueprint $table) {
            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreign('comment')
                ->references('id')
                ->on('comment')
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
        Schema::dropIfExists('vote_comment');
    }
}
