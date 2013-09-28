<?php
class Product extends Content {
    
    protected $_id = 'id';
    protected $_tableName = 'products';
    
    public function getActiveProducts($options = array(), $offset = 0, $limit = 10){
        $sql = "SELECT * FROM " . $this->_tableName . " WHERE active > 0 AND name != ''";
        
        if (isset($options['category']) && $options['category'] > 0){
            $sql .= " AND category = " . $options['category'];
        }
        
        if (isset($options['brand']) && $options['brand'] > 0){
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
    
    public function getFormattedPrice(){
        return number_format($this->getPrice(), 2);
    }
    
    public function getFormattedWeight(){
        return number_format($this->getWeight(), 2);
    }
}