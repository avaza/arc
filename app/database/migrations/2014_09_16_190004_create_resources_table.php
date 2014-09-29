<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_number')->unsigned()->unique()->index();//employee id number auto generated
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->integer('extension_num')->unsigned()->nullable();
            $table->integer('extension_pin')->unsigned()->nullable();
            $table->bigInteger('primary_phone')->unsigned();
            $table->bigInteger('secondary_phone')->unsigned()->nullable();
            $table->boolean('active')->unsigned()->default(1);
            $table->string('time_zone', 100)->default('America/Chicago');
            $table->string('inactive_reason', 20)->nullable();//quality control, no answer, complaint, vacation, quit
            $table->string('status')->default('Pending');
            $table->integer('manager_id')->unsigned()->nullable();
            $table->foreign('manager_id')->references('id')->on('resources');
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
		Schema::drop('resources');
	}

}
