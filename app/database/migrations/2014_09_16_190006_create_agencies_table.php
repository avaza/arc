<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencies', function(Blueprint $table)
		{
			$table->increments('id');
            $table->boolean('active')->default(1);
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('contract_id')->unsigned()->index();
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->integer('clientid')->unique();//critical invoice header detail
            $table->string('name');               //critical invoice header detail
            $table->string('bill_to')->nullable();
            $table->string('street_1');
            $table->string('street_2')->nullable();
            $table->string('building')->nullable();
            $table->string('suite')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->text('special_invoice_json')->nullable();
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
		Schema::drop('agencies');
	}

}
