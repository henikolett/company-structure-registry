<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('elements', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('parent_id')->nullable()->index();
        $table->integer('type_id');
        $table->string('name', 255);

        $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('elements');
  }

}
