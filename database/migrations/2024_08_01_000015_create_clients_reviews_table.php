<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('clients_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('role')->nullable();
            $table->string('rate');
            $table->longText('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
