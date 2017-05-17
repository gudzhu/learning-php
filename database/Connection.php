<?php

/**
* Return new PDO instance
*/
class Connection
{
	public static function make($config)
	{
		try {
        	return new PDO(
        	    $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
	    } catch (PDOException $e) {
	        die($e->getCode() . ': ' . $e->getMessage());
	    }
	}
}