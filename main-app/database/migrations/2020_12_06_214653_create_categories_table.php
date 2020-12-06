<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('larablog_categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('category_name');
            $table->string('category_slug')->unique();
            $table->string('category_description', 512)->nullable();
            $table->unsignedBigInteger('category_parent_id')->nullable();
            $table->timestamps();

            $table->foreign('category_parent_id')->references('category_id')
                ->on('larablog_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('larablog_categories', function (Blueprint $table) {
            $table->dropForeign(['category_parent_id']);
        });
        Schema::dropIfExists('larablog_categories');
    }
}
