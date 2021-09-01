<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemes1AboutsTable extends Migration {
  public function up() {
    Schema::create('themes_1_abouts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('sub_title');
      $table->string('image');
      $table->string('content_title');
      $table->text('content_description');      
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('themes_1_abouts');
  }
}