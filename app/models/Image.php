<?php

class Image extends Eloquent
{
    protected $table = 'images';

	public static $rules = array(
	    'url'      		=> 'required|max:255',
	    'image_title'   => 'max:255'
	);

	public function post()
	{
	    return $this->belongsTo('Post');
	}

}
