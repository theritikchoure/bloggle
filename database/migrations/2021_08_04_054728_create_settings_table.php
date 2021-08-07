<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_img');
            $table->string('logo_txt');
            $table->string('blog_name');
            $table->text('meta_desc');
            $table->string('fp_blog_limit');
            $table->string('fp_slider_limit');
            $table->string('rec_post_limit');
            $table->string('pop_post_limit');
            $table->string('cat_limit');
            $table->string('comment');
            $table->string('comment_auto_appr');
            $table->string('fb_url');
            $table->string('inst_url');
            $table->string('twit_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
