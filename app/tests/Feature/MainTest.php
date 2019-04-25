<?php

namespace Tests\Feature;

use Cubitworx\Laravel\Countries\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MainTest extends TestCase {
	use DatabaseMigrations;

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testCountries() {
		$this->assertEquals(Model\Country::count(), 252);
	}

}
