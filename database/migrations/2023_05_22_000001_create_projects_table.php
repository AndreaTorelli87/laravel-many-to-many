<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
   {
      Schema::create("projects", function (Blueprint $table) {

         //https://laravel.com/docs/9.x/migrations#available-column-types

         $table->id();
         $table->string("img")->nullable();
         $table->string("titolo", 200)->unique();
         $table->text("data_creazione");
         $table->text("descrizione");
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists("projects");
   }
};
