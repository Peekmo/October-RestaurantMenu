<?php

namespace Peekmo\RsMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealsAndCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('rsmenu_menu_categories', function(BluePrint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('rsmenu_meal', function(BluePrint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('prince')->unsigned();
            $table->string('money');
            $table->timestamps();

            // Foreign key
            $table->foreign('category_id')->references('id')->on('rsmenu_menu_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('rsmenu_meal');
        Schema::drop('rsmenu_menu_categories');
    }
}
