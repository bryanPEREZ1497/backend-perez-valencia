<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))
            ->create('authors', function (Blueprint $table) {
                $table->id();
                $table->string('email');
                $table->string('identification');
                $table->string('names');
                $table->string('phone');
                $table->integer('age')->unsigned(); //no tiene signo ej -10 ;
                // $table->foreignId('project_id'); esta forma estab bien ppero usaremos la de abajo
                $table->foreignId('project_id')->constrained('app.projects');
                $table->softDeletes(); //todas las migrations con este campo
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('authors');
    }
}
