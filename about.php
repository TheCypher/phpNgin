<?php
	/**
	* phpNgin - simple PHP framework
	*/
	$site_path = realpath(dirname(__FILE__));
	define ('__SITE_PATH', $site_path);
	use App\Ngin\Handler as Handler;

	require'vendor/autoload.php';
	$handler = new Handler();
	$handler->loadPage(['page'=>"about", 'path'=>"$site_path"]);
?>