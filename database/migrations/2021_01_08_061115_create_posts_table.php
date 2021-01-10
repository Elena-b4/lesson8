<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->softDeletes();

//            index
            $table->index('category_id', 'post_category_idx');
            $table->index('user_id', 'post_user_idx');

//            FK
            $table->foreign('category_id', 'post_category_fk')->references('id')->on('categories');
            $table->foreign('user_id', 'post_user_fk')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
