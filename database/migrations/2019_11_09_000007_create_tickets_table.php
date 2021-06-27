<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->longText('content')->nullable();

            $table->string('author_name')->nullable();

            $table->string('contact')->nullable();

            $table->string('escalation')->nullable();

            $table->string('site')->nullable();

            $table->string('date')->nullable();

            $table->string('author_email')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
