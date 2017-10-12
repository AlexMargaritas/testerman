<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name', 'link_url', 'image_url', 'network', 'price', 'uuid'
	];
}