<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_files', function (Blueprint $table) {
            $table->id();
            $table->string("filePath")->nullable();
            $table->timestamps();

            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            //post_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_files');
    }
}
