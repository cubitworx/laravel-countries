<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('countries', function (Blueprint $table) {
			$table->increments('id');

			$table->string('name');

			$table->boolean('active')->default(0);
			$table->string('iso_3166_1', 2);
			$table->string('nationality')->nullable();

			$table->integer( 'created_by' )->nullable();
			$table->integer( 'updated_by' )->nullable();
			$table->timestamps();

			$table->unique('iso_3166_1');
			$table->index('active');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('countries');
	}

}
