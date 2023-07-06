<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_subjects', function (Blueprint $table) {
            $table->id();

            $table->string('object_left');
            /* $table->string('exit_time'); */
              
            $table->longText('motive');
            $table->integer('by');
             
            $table->unsignedBigInteger('pvc_id');
            $table->foreign('pvc_id')->references('id')->on('pvcs')->onDelete('cascade');

            $table->unsignedBigInteger('progress_id');
            $table->foreign('progress_id')->references('id')->on('progress')->onDelete('cascade');
    
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('visitor_id');
            $table->foreign('visitor_id')->references('id')->on('visitors')->onDelete('cascade');

            $table->unsignedBigInteger('thing_id')->nullable();
            
            $table->foreign('thing_id')->references('id')->on('things')->onDelete('cascade');
            

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
        Schema::dropIfExists('manage_subjects');
    }
}
