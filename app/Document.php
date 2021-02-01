<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	// public $timestamps = false;
    // protected $guarded = [];
    protected $fillable = [
		'ndocument',
		'description',
		'archive',
		'user_id',
		'updated_at'
	];
}
