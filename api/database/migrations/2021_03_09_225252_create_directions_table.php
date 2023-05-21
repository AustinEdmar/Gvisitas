<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();

            $table->mediumInteger('extention');

            $table->unsignedBigInteger('floor_id')->unique();

            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('cascade');

            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');

            /* $table->unsignedBigInteger('user_id')->unique();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
 */
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

        Schema::dropIfExists('directions');
    }
}
