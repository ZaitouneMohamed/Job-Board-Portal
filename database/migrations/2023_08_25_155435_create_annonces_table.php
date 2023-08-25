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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->integer("type");
            $table->bigInteger("companie_id")->unsigned();
            $table->foreign("companie_id")->references("id")->on("companies")->onDelete("cascade");
            $table->text("description");
            $table->string("location");
            $table->integer("statue");
            $table->bigInteger("categorie_id")->unsigned();
            $table->foreign("categorie_id")->references("id")->on("categories")->onDelete("cascade");
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
        Schema::dropIfExists('annonces');
    }
};
