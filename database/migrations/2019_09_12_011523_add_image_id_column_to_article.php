<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageIdColumnToArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->bigInteger('image_id')->unsigned()->index();
            $table->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_image_id_foreign');
            $table->dropIndex('articles_image_id_index');
            $table->dropColumn('image_id');
        });
    }
}
