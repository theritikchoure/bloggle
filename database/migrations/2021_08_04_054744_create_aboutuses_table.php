<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->text('meta_desc');
            $table->string('heading');
            $table->string('head_img');
            $table->string('text');
            $table->string('c_one_head');
            $table->string('c_one_text');
            $table->string('c_two_head');
            $table->string('c_two_text');
            $table->string('c_three_head');
            $table->string('c_three_text');
            $table->string('c_four_head');
            $table->string('c_four_text');
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
        Schema::dropIfExists('aboutuses');
    }
}
