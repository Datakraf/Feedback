<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbackReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedback_reply', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('admin_id')->index('fk_admin_reply_users1_idx');
			$table->integer('feedback_id')->index('fk_admin_reply_feedback1_idx');
			$table->text('reply', 65535);
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
		Schema::drop('feedback_reply');
	}

}
