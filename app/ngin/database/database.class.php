<?php
namespace App\Ngin\Database;
/**
*  DB - A simple database class 
*
* @author	Author: Vivek Wicky Aswal. (https://twitter.com/#!/VivekWickyAswal)
* @author 	Nickson Ariemba
* @git 		https://github.com/indieteq/PHP-MySQL-PDO-Database-Class
* @version  0.2ab
*
*/

$site_path = realpath(dirname(__FILE__));
require $site_path . '/../../../vendor/autoload.php';
use App\Ngin\Database\DatabaseEngine as DatabaseEngine;
use PDO;

class Database extends DatabaseEngine
{
    /**
	*   Default Constructor 
	*
	*	1. Instantiate Log class.
	*	2. Connect to database.
	*	3. Creates the parameter array.
	*/
	public function __construct($database = null)
	{
		parent::__construct($database);	
	}
		

	/**
	*  Returns the last inserted id.
	*  @return string
	*/	
	public function lastInsertId() {
		return $this->pdo->lastInsertId();
	}	
		
    
    /**
	*	Returns an array which represents a column from the result set 
	*
	*	@param  string $query
	*	@param  array  $params
	*	@return array
	*/	
	public function column($query,$params = null)
	{
		$this->Init($query,$params);
		$Columns = $this->sQuery->fetchAll(PDO::FETCH_NUM);		
		
		$column = null;

		foreach($Columns as $cells) {
			$column[] = $cells[0];
		}

		return $column;
	}	
       

    /**
	*	Returns an array which represents a row from the result set 
	*
	*	@param  string $query
	*	@param  array  $params
	*   @param  int    $fetchmode
	*	@return array
	*/	
	public function row($query,$params = null,$fetchmode = PDO::FETCH_OBJ)
	{				
		self::Init($query,$params);
		return $this->sQuery->fetch($fetchmode);			
	}


    /**
	*	Returns an int which represents number of rows from the result set 
	*
	*	@param  string $query
	*	@param  array  $params
	*   @param  int    $fetchmode
	*	@return int
	*/	
	public function rowCount($query,$params = null,$fetchmode = PDO::FETCH_OBJ)
	{				
		self::Init($query,$params);
		return $this->sQuery->rowCount($fetchmode);			
	}


    /**
	*	Returns the value of one single field/column
	*
	*	@param  string $query
	*	@param  array  $params
	*	@return string
	*/	
	public function single($query,$params = null)
	{
		$this->Init($query,$params);
		return $this->sQuery->fetchColumn();
	}		
}
?>