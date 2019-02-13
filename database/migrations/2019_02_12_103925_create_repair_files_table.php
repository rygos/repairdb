<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repair_id');
            $table->text('file_name');
            $table->text('file_ext');
            $table->text('storage_path');
            $table->timestamps();

            $table->index('repair_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_files');
    }
}
