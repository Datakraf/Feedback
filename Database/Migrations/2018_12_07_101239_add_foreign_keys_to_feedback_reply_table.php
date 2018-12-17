<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeedbackReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('feedback_reply', function(Blueprint $table)
		{
			$table->foreign('feedback_id', 'fk_admin_reply_feedback1')->references('id')->on('feedback')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('admin_id', 'fk_admin_reply_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('feedback_reply', function(Blueprint $table)
		{
			$table->dropForeign('fk_admin_reply_feedback1');
			$table->dropForeign('fk_admin_reply_users1');
		});
	}

}
