<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        // $this->call(UsersTableSeeder::class);
        User::create([
    		'nome'  		=> 'Admin',
    		'cpf'  			=> '00000000000',
    		'tipo'			=> 'fisica',
    		'endereco'		=> 'rua X, bairro X, nº X',
    		'telefone'		=> '9999 9999',
    		'estado_civil'	=> 'Solteiro',
    		'data_nascimento'=> '1994-08-22',
    		'permissao'		=> 'administrador',
    		'email'  		=> 'admin@admin.com', 
    		'password'  	=>  bcrypt('123456'), 
    	]);


    
   
    }
}
