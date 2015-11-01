<?php
/**
* phpNgin - simple PHP framework
*
* @package	phpNgin
* @author 	Nickson Ariemba
* @version 	Beta 1.0
*/

/**
* baseController
*/

Abstract class baseController
{
	/**
	* All controllers must have an index method
	*/
	abstract function index($view);
}
?>