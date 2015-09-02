<?php

class ImagesController extends \BaseController {

		public function upload($file)
	{
	    $this->imageUploader->upload($file);
	    return View::make('/');
	}
}

?>

