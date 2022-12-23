<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * マイグレーションの実行.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('body',200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * マイグレーションを戻す.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
