<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table)
        {
                    $table->increments('id');
                    $table->string('grupo_id', 100);
                    $table->string('nome', 100);
                    $table->string('email', 100);
                    $table->string('senha', 100);
                    $table->string('telefone', 50);
                    $table->timestamps();
                    $table->index(['nome','email']);
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
