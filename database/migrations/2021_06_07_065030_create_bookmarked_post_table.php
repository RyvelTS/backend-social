<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarkedPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmarked_post', function (Blueprint $table) {
            $table->bigInteger('user')->unsigned();
            $table->bigInteger('post')->unsigned();
            $table->timestamp('created_at')->default(CURRENT_TIMESTAMP);
        });

        Schema::table('bookmarked_post', function (Blueprint $table) {
            $table->primary(['user', 'post']);
            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreign('post')
                ->references("id")
                ->on('post')
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
        Schema::dropIfExists('bookmarked_post');
    }
}
