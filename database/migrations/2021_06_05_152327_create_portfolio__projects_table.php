<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio__projects', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable();
            $table->string('project_name');
            $table->string('thumbnail');
            $table->longText('description')->nullable();
            $table->string('url')->nullable();
            $table->string('date')->nullable();
            $table->string('client_name')->nullable();
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
        Schema::dropIfExists('portfolio__projects');
    }
}
