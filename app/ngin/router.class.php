<?php namespace App\Ngin;
/**
* phpNgin - simple PHP framework
*
* @package	phpNgin
* @author 	Nickson Ariemba
* @version 	Beta 1.0
*/

/**
* router
*/
class Router
{
	/**
	* Check if controller exists
	* @param string
	*/
	protected function checkController($page)
	{
		$controllerPath = __SITE_PATH . '/app/controllers/'.$page['page'].'.controller.php';
		if (file_exists($controllerPath)) {
			$return = [
				'check'=>"1", 
				'controllerPath'=>"$controllerPath"
			];
		}
		else
		{
			$return = [
				'check'=>"0"
			];
		}
		return($return);
	}


	/**
	* Get controller
	* @param string
	*/
	protected function getController($page)
	{
		$checkController = self::checkController($page);
		$check = $checkController['check'];

		switch ($check) {
			case '1':
				$baseController = __SITE_PATH . '/app/ngin/base.controller.class.php';

				include_once $baseController;
				include_once $checkController['controllerPath'];
				$controller = $page['page'].'Controller';
				$controller = new $controller();

				$view = __SITE_PATH . '/app/views/'.$page['page'].'.html.php';
				$controller->index($view);
			break;
			
			case '0':
				$controllerName = $page['page'];
				print_r(
					'
						<center>
							<h1>
								Invalid controller "'.$controllerName.'"
							</h1>
						</center>
					'
				);
			break;
		}
	}
}
?>