<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('language_id')->unsigned()->index();
			$table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->morphs('settable');
            $table->integer('language_set')->default(4);
			$table->decimal('otp_rate', 2, 2)->default(00.00);
			$table->decimal('otp_ahup', 2, 2)->default(00.00);
			$table->decimal('ons_rate', 3, 2)->default(00.00);
			$table->decimal('ons_ahup', 3, 2)->default(00.00);
			$table->decimal('vri_rate', 2, 2)->default(00.00);
			$table->decimal('vri_ahup', 2, 2)->default(00.00);
			$table->decimal('tsl_rate', 3, 2)->default(00.00);
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
		Schema::drop('settables');
	}

}
