<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showcase extends Model
{
    use SoftDeletes;

    /**
     * The attributes default values.
     *
     * @var array
     */
    protected $attributes = ['layout' => '{}'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ["title"];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'layout' => 'array',
    ];
}