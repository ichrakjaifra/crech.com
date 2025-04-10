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
        Schema::create('subject', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable(); 
            $table->string('type', 255)->nullable()->comment('Theory/Practical');
            $table->tinyInteger('status')->default(0)->comment('0:active, 1:inactive');
            $table->tinyInteger('is_delete')->default(0)->comment('0:not, 1:yes');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            
            // Clé étrangère optionnelle
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('subject');
    }
};