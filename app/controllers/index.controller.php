<?php
class IndexController extends BaseController
{
	public function index($view)
	{
		include_once __SITE_PATH . '/app/engine/version/version.class.php';
		
		$versionClass = new Version();
		$version = $versionClass->showVersion();
		$framework = ['name'=>"phpNgin"];

		/*-- load view  --*/
		include $view;
	}
}
?>