<?php


class Tag extends Eloquent
{
    protected $table = 'tags';

	public static $rules = array(
	    'name' => 'required|max:255'
	);

	public function posts()
    {
        return $this->belongsToMany('Post');
    }
}

