<?php

/**
* Return new PDO instance
*/
class Connection
{
	public static function make()
	{
		try {
        	return new PDO('mysql:hostname=127.0.0.1;dbname=mytodo', 'root', '68696');
	    } catch (PDOException $e) {
	        die($e->getCode() . ': ' . $e->getMessage());
	    }
	}
}