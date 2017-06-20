<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCoverBook extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
 // Schema::table('books', function(Blueprint $table) {
 // $table->string('cover')->after('title');
 // });
Schema::table('books', function(Blueprint $table) {
$table->string('cover')->after('title')->default("f579e79148df9a6c2e8e65741bf56055.png");
});

		// Schema::table('cover_book', function(Blueprint $table)
		// {
			
		// });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table('cover_book', function(Blueprint $table)
		// {
			
		// });
	//  Schema::table('books', function(Blueprint $table) {
 // $table->dropColumn('cover');
 // });
Schema::table('books', function(Blueprint $table) {
$table->dropColumn('cover');
});

	}

}
