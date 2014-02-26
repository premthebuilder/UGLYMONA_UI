<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
			$table->string('nickname')->default(null);
			$table->string('fullname')->default(null);
			$table->enum('type', array('mf', 'mm', 'fm', 'ff'))->nullable()->default(null);
			$table->date('dob')->nullable()->default(null);
			$table->enum('status', array('single', 'married', 'divorced', 'widowed', 'separated'))->nullable()->default(null);
			$table->enum('gender', array('male', 'female'))->nullable()->default(null);
			$table->enum('children', array('none', 'one', 'two', 'three'))->nullable()->default(null);
			$table->boolean('wchildren')->nullable()->default(null);
			$table->boolean('complete')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
