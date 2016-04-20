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

	public static function getAllLike($search)
	{
		return self::where("title", "LIKE", "%$search%")->orWhere("body", "LIKE", "%$search%")->orderBy('created_at', 'DESC')->paginate(4);
	}

	public function isAuthor(User $user)
	{
		return $this->user_id == $user->id;
	}
}

?>