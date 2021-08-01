<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))
            ->create('projects', function (Blueprint $table) {
                $table->id();
                $table->string('code')
                    ->comment('some comment');
                $table->date('date')
                    ->comment('some comment');
                $table->text('description')
                    // ->nullable() //pse puede guardar con null
                    ->comment('some comment');
                $table->boolean('approved')
                    ->default(true) //cuando no se envia con ningun valor
                    ->comment('some comment');
                $table->string('title')
                    ->comment('some comment');
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('projects');
    }
}
