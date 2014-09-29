<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDivisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('divisions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->boolean('active')->default(1);
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('agency_id')->unsigned()->index();
            $table->foreign('agency_id')->references('id')->on('agencies');
            $table->string('name');//critical invoice line detail
            $table->string('access_code')->unique();//critical invoice line detail
            $table->string('street_1');
            $table->string('street_2')->nullable();
            $table->string('building')->nullable();
            $table->string('suite')->nullable();
            $table->string('city');
            $table->string('county')->nullable();
            $table->string('state');
            $table->string('zip');
            $table->text('otp_special_json')->nullable();
            $table->text('ons_special_json')->nullable();
            $table->text('vri_special_json')->nullable();
            $table->text('tsl_special_json')->nullable();
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
		Schema::drop('divisions');
	}

}
