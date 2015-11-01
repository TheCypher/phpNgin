<?php

/**
* phpNgin - simple PHP framework
*
* @package	phpNgin
* @author 	Nickson Ariemba
* @version 	Beta 1.0
*/
/**
* view
*/
class View
{
	/**
	* Load view
	*/
	protected function loadViews($view)
	{
		include_once $view;
	}
}
?>