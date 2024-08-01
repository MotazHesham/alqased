<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->decimal('price', 15, 2);
            $table->decimal('discount', 15, 2)->nullable();
            $table->string('discount_type')->nullable();
            $table->string('model')->nullable();
            $table->string('load')->nullable();
            $table->string('speed')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('max_stop')->nullable();
            $table->string('max_rise')->nullable();
            $table->boolean('is_available')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
