<?php

use Carbon\Carbon;

class Post extends BaseModel 
{
	public static $rules = [
	    'title'	=> 'required|max:100|min:3',
	    'body'	=> 'required|max:10000'
	];

	protected $table = 'posts';

	public function setBodyAttribute($body)
	{
		$this->attributes['body'] = strip_tags($body);
	}

	public function user()
	{
	    return $this->belongsTo('User');
	}
}

?>