<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('larablog_blogs', function (Blueprint $table) {
            $table->bigIncrements('blog_id');
            $table->string('blog_title');
            $table->string('blog_slug')->unique();
            $table->longText('blog_description')->nullable();
            $table->unsignedBigInteger('blog_category')->nullable();
            $table->unsignedBigInteger('blog_author');
            $table->timestamps();

            $table->foreign('blog_category')->references('category_id')
                ->on('larablog_categories')->onDelete('cascade');
            $table->foreign('blog_author')->references('id')
                ->on('larablog_admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('larablog_blogs', function (Blueprint $table) {
            $table->dropForeign(['blog_category']);
            $table->dropForeign(['blog_author']);
        });
        Schema::dropIfExists('larablog_blogs');
    }
}
