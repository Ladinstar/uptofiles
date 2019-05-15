<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('extension_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('link');
            $table->integer('length');
            $table->softDeletes();
            $table->timestamps();

            // References
            $table->foreign('extension_id')
                    ->references('extension_id')
                    ->on('extensions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
