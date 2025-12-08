<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
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
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

			// people data
			$table->string('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->char('phone', 11);
			$table->date('birth')->nullable();
			$table->char('gender', 1)->nullable();
			$table->text('notes')->nullable();

			// auth data
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();
            

			//permission data
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');
			
			$table->rememberToken();
			$table->timestamps(); //cria 2 campos (created_at, updated_at)
			$table->softDeletes();//caso o registro for apagado, ele continua no banco mas para aplicação
		});


		Schema::create('sessions', function (Blueprint $table) {
			$table->string('id')->primary();
			$table->foreignId('user_id')->nullable()->index();
			$table->string('ip_address', 45)->nullable();
			$table->text('user_agent')->nullable();
			$table->longText('payload');
			$table->integer('last_activity')->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{	
		// Apaga a tabela de sessões
        Schema::dropIfExists('sessions');
        
        // Apaga a tabela de usuários
        Schema::dropIfExists('users');
	}
};
