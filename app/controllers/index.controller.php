<?php
use Engine\Version\Version as Version;

class IndexController extends BaseController
{
	public function index($view)
	{		
		// code breaks here -> $versionClass = new Version();
		//$version = $versionClass->showVersion();
		$framework = ['name'=>"phpNgin"];

		/*-- load view  --*/
		include $view;
	}
}
?>