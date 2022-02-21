<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentModelsTable extends Migration
{
   
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('author', 150);
            $table->string('content',500);
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('likes')->nullable();
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
