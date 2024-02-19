<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    
    // public function __construct()
    // {
    //     parent ::__construct();
    // }



    //public function get_data($query)
    public function get_data()
    {
        // $result = $this -> con-> query($query);

        // if ($result == false)
        // {
        //     return false;
        // }

        // $rows = array();

        // while ($row = $result -> fetch_assoc())
        // {
        //     $rows[] = $row;
        // }

        return view ('add_product');

    }

    // public function execute($query) 
	// {
	// 	$result = $this->connection->query($query);
		
	// 	if ($result == false) {
	// 		echo 'Error: cannot execute the command';
	// 		return false;
	// 	} else {
	// 		return true;
	// 	}		
	// }

    // public function delete($id, $table) 
	// { 
	// 	$query = "DELETE FROM $table WHERE id = $id";
		
	// 	$result = $this->connection->query($query);
	
	// 	if ($result == false) {
	// 		echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
	// 		return false;
	// 	} else {
	// 		return true;
	// 	}
	// }

	// public function execute_query($query) {
    //     $result = $this->connection->query($query);

    //     if ($result === false) {
    //         // Handle query error here
    //         die("Query failed: " . $this->connection->error);
    //     }

    //     return $result;
    // }

    // public function escape_string($value)
	// {
	// 	return $this->connection->real_escape_string($value);
	// }

	
}
