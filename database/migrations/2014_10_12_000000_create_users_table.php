<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');



            //INFORMAÇÕES PESSOAIS
            $table->string('nome');
            $table->string('cpf')->unique()->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->enum('tipo',['fisica','juridica'])->default('fisica');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('estado_civil');
            $table->date('data_nascimento')->nullable();


            //PERMISSÕES
            $table->enum('permissao',['administrador','supervisor','cliente'])->default('cliente');

            //AUTENTICAÇÃO
            $table->string('email')->unique();
            $table->string('password');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
