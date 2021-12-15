<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('events', function(Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("content", 500);
            $table->string("address")->unique();
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->on("categories")->references("id");
            $table->string("duration");
            $table->string("day");
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->on("users")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
