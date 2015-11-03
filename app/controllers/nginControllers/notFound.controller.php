<?php
class NotFoundController extends BaseController
{
	public function index($view)
	{
		/*-- load view  --*/
		include $view['view'];
	}
}
?>