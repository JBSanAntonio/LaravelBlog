<?php

/*GOES IN ROUTES.PHP*/

Route::get('rolldice/{guess}', function($guess = null)
{
	$rand = mt_rand(1, 12);
	$data = ['guess' => $guess, 'rand' => $rand];
	return View::make('rolldice')->($data);
});




?>