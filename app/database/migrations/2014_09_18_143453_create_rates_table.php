<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rates', function(Blueprint $table)
		{
			$table->increments('id');
            $table->morphs('ratable');
            $table->integer('language_set');//0 = all sets
            $table->string('rate_for');//otp/ons/tsl/vri/tsl_format/otp_outbound
            $table->decimal('rate', 3, 2)->default(000.00);
            $table->decimal('ahup', 3, 2)->default(000.00);
            $table->decimal('rush', 3, 2)->default(000.00);
            $table->decimal('cncl', 3, 2)->default(000.00);
            $table->string('per');//minute/hour/word/document
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
		Schema::drop('rates');
	}

}
