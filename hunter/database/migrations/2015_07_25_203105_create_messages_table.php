<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('subject');
			$table->longText('content');
			$table->integer('sender_id')->unsigned()->index();
			$table->integer('receiver_id')->unsigned()->index();
			$table->string('sender_email',255);
			$table->string('receiver_email',255);
			$table->dateTime('send_date');
			$table->dateTime('received_date');
			$table->enum('status', ['Sent', 'Unread', 'Read']);
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
		Schema::drop('messages');
	}

}
