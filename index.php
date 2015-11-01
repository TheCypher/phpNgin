<?php
	/**
	* phpNgin - simple PHP framework
	*/
	$site_path = realpath(dirname(__FILE__));
	define ('__SITE_PATH', $site_path);
	
	include'app/ngin/handler.class.php';
	$handler = new App\Ngin\Handler();
	$handler->loadPage(['page'=>"index", 'path'=>"$site_path"]);
?>