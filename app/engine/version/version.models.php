<?php
/**
* Version
*
* @package	phpNgin
* @author 	Nickson Ariemba
* @version 	Beta 1.0
*/
class versionModels
{
	public function showVersionModel()
	{
		/**
		* Version model
		* @return Array
		*/
		$version = [
			'version'=>"Beta 1.0",
			'Author'=>"Nickson Ariemba",
			'Date Created'=>"Nov,1,2015"
		];
		return($version);
	}
}
?>