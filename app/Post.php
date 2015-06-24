<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Post extends Model
{

	public function comments()
	{
		return $this->embedsMany('App\Comment');
	}

}
