<?php namespace App\Ngin;
include'router.class.php';
/**
* phpNgin - simple PHP framework
*
* @package	phpNgin
* @author 	Nickson Ariemba
* @version 	Beta 1.0
*/

/**
* handler
*/
class Handler extends Router
{
	/**
	* get and set needed page files
	* @param
	* @return IDK yet
	*/
	public function loadPage($page)
	{
		$controller = self::getController($page);
	}
}
?>