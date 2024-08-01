<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('short_description')->nullable();
            $table->longText('details')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('results')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('client')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->longText('tags')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
