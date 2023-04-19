<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void   
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->text("excerpt");
            $table->text("content");
            $table->text("image");
            $table->foreignId("author_Id")->constrained("users");
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
        Schema::dropIfExists('posts');
    }
};