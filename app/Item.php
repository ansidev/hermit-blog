<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $table = 'items';

	protected $fillable = [
		'name',
		'parent_name',
		'parent_id',
		'location_name',
		'location_id',
		'childable'
	];
}
