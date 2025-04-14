<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('class_subject', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:active, 1:inactive');
            $table->tinyInteger('is_delete')->default(0)->comment('0:not, 1:yes');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            
            // Foreign keys
            $table->foreign('class_id')->references('id')->on('class')->onDelete('CASCADE');
            $table->foreign('subject_id')->references('id')->on('subject')->onDelete('CASCADE');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('class_subject');
    }
};