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
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parishioner_id');
            $table->unsignedBigInteger('category_id');
            $table->float('amount',8,2);
            $table->bigInteger('receipt_number');


            $table->foreign('parishioner_id')->references('id')->on('parishioners')
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('contribution_categories')
              ->onUpdate('cascade')
              ->onDelete('cascade');

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
        Schema::dropIfExists('contributions');
    }
};
