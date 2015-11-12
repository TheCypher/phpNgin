<?php
class AboutController extends BaseController
{
	public function index($view)
	{
		$name = [
			'name'=>"About.php"
		];

		/*-- load view  --*/
		include $view;
	}
}
?>