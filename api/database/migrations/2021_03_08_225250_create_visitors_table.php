<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->string('birthday');
            $table->string('image')->nullable();

            $table->string('doc_number')->nullable();
            $table->string('doc_emition')->nullable();

            $table->string('affiliation')->nullable();
            $table->BigInteger('phone_number')->nullable();

           /*  $table->foreignId('nacionality_id')->constrained(); */
           $table->unsignedBigInteger('gender_id');
           $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->unsignedBigInteger('nacionality_id');
            $table->foreign('nacionality_id')->references('id')->on('nacionalities')->onDelete('cascade');

            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');



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
        Schema::dropIfExists('visitors');
    }
}
