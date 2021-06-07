<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_comment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user')->unsigned();
            $table->bigInteger('comment')->unsigned();
            $table->string('reply');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('reply_comment', function (Blueprint $table) {
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
        Schema::dropIfExists('reply_comment');
    }
}
