<?php
class DB{

    var $_db;
    var $_last_query;

    function __construct(){
        include "credentials.php";

        $this->_db = new mysqli($dbhost, $dbuser, $dbpass, $dbbass);
        return $this;
    }

    public function getMysqli(){
        return $this->_db;
    }

    public function query($sql){
    	$this->_last_query = $sql;
        $res = mysqli_query($this->_db, $sql);
        if (!$res || is_string($res)){
            throw new Exception("Error in sql statement (" . $res . "): " . mysqli_error($this->_db));
        }
        return $res;
    }

    public function getLastId(){
    	return mysqli_insert_id($this->_db);
    }

    public function getLastQuery(){
    	return $this->_last_query;
    }

    public function getOne($sql){
    	$this->_last_query = $sql;
    	$res = mysqli_query($this->_db, $sql);
    	if (mysql_num_rows($res) > 0){
	    	$row = mysqli_fetch_row($res);
	    	return $row[0];
    	} else {
    		return null;
    	}
    }

    public function getAll($sql){
    	$this->_last_query = $sql;
    	$res = mysqli_query($this->_db, $sql);
        if (!$res || is_string($res)){
            throw new Exception("Error in sql statement (" . $res . "): " . mysqli_error($this->_db));
        }
        $data = array();
        while ($row = mysqli_fetch_array($res)){
        	$data[] = $row;
        }
        return $data;
    }

}
?>