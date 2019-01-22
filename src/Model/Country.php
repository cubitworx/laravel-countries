<?php

namespace Cubitworx\Laravel\Countries\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $guarded = [
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	];

}
