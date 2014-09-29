<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('time_zone', 100)->default('America/Chicago');
            $table->bigInteger('phone')->unsigned();
            $table->integer('phone_ext')->nullable();
            $table->bigInteger('fax')->nullable()->unsigned();
            $table->integer('manager_id')->unsigned()->nullable();
            $table->foreign('manager_id')->references('id')->on('resources');
            $table->integer('personal_access_code')->nullable();
            $table->dateTime('last_request')->nullable();
            $table->softDeletes();
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
		Schema::drop('clients');
	}

}
