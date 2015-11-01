<?php
/**
* Version
*
* @package	phpNgin
* @author 	Nickson Ariemba
* @version 	Beta 1.0
*/

include_once"version.models.php";
class version extends versionModels
{
	/**
	* show version
	* @return Array
	*/
	public function showVersion()
	{
		$return =[];
		$model = self::showVersionModel();
		
		foreach ($model as $key => $value) {
			$return[] = ''.$key.': '.$value.'';
		}
		return($return);
	}
}
?>