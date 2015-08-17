<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 120);
			$table->string('password');
                        $table->smallInteger('status');
                        $table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
//                DB::table('users')->insert([
//                    ['email' => 'hasan@example.com', 'password' => Hash::make('1234')],
//                    ['email' => 'mishel@example.com', 'password' => Hash::make('12345')]
//                ]);
	}
        
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
