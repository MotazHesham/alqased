<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('behance')->nullable();
            $table->longText('description')->nullable();
            $table->longText('keywords_seo')->nullable();
            $table->string('author_seo')->nullable();
            $table->string('sitemap_link_seo')->nullable();
            $table->longText('description_seo')->nullable();
            $table->string('clients_count')->nullable();
            $table->string('projects_count')->nullable();
            $table->string('products_count')->nullable();
            $table->string('experience_count')->nullable();
            $table->longText('who_we_are')->nullable();
            $table->longText('who_we_are_more')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
