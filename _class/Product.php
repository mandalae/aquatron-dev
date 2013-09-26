<?php
class Product extends Content {
    
    protected $_id = 'id';
    protected $_tableName = 'products';
    
    public function getActiveProducts($options = array(), $offset = 0, $limit = 10){
        $sql = "SELECT * FROM " . $this->_tableName . " WHERE active > 0 AND name != ''";
        
        if (isset($options['category'])){
            $sql .= " AND category = " . $options['category'];
        }
        
        if (isset($options['brand'])){
            $sql .= " AND brand = " . $options['brand'];
        }
        
        $sql .= " LIMIT " . $offset . "," . $limit;
        
        $res = $this->_db->query($sql);
        $return = array();
        while ($row = mysqli_fetch_array($res)){
            $return[] = $row;
        }

        return $return;
    }
}