<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Comment extends Model
{
	public function post()
	{
		return $this->belongsTo('App\Post');
	}
}
