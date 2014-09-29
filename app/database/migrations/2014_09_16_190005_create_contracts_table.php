<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contracts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->boolean('active')->default(1);
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('name');
            $table->integer('account_number')->unique();//critical invoice header detail
            $table->string('contract_number')->unique();
            $table->string('current_po_number')->nullable();//critical invoice header detail
            $table->string('expired_po_number_json')->nullable();//['62013_62014':'PO NUMBER HERE', '62012_62013':'PO NUMBER HERE']
            $table->date('start_date');
            $table->date('end_date');
            //TIMEFRAME DETAILS
            $table->time('ah_start')->default('20:00:00');
            $table->time('ah_end')->default('08:00:00');
            $table->boolean('ah_weekends')->default(1);
            //OVER THE PHONE FEES
            $table->boolean('otp_user')->default(1);
            $table->decimal('otp_ahup', 2, 2)->default(0.20);
            $table->decimal('otp_cout', 2, 2)->default(0.50);
            //ONSITE FEES
            $table->boolean('ons_user')->default(0);
            $table->integer('ons_ahup')->default(20);
            $table->integer('ons_rush')->default(20);
            $table->integer('ons_cncl')->default(20);
            //VRI FEES
            $table->boolean('vri_user')->default(0);
            $table->decimal('vri_ahup', 2, 2)->default(0.50);
            $table->decimal('vri_odup', 2, 2)->default(0.25);
            $table->decimal('vri_cncl', 2, 2)->default(5.00);
            //TRANSLATION FEES
            $table->boolean('tsl_user')->default(0);
            $table->integer('tsl_rush')->default(50);
            $table->integer('tsl_form')->default(25);
            $table->integer('tsl_cncl')->default(25);
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
		Schema::drop('contracts');
	}

}
