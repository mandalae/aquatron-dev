<?php
class Product extends Content {
    
    protected $_id = 'id';
    protected $_tableName = 'products';
    
    public function getActiveProducts($options = array(), $offset = 0, $limit = 10){
        $sql = "SELECT * FROM " . $this->_tableName . " WHERE active > 0 AND name != ''";
        $countSql = "SELECT count(1) as number FROM " . $this->_tableName . " WHERE active > 0 AND name != ''";
        
        if (isset($options['category']) && $options['category'] > 0){
            $sql .= " AND category = " . $options['category'];
            $countSql .= " AND category = " . $options['category'];
        }
        
        if (isset($options['brand']) && $options['brand'] > 0){
            $sql .= " AND brand = " . $options['brand'];
            $countSql .= " AND brand = " . $options['brand'];
        }
        
        $count = $this->_db->query($countSql);
        $countRow = mysql_fetch_row($count);

        $sql .= " LIMIT " . $offset . "," . $limit;
        
        $res = $this->_db->query($sql);
        $return = array();
        while ($row = mysql_fetch_array($res)){
            $return[] = $row;
        }

        return array('products' => $return, 'numberOfProducts' => $countRow[0]);
    }
    
    public function getFormattedPrice(){
        return number_format($this->getPrice()/10, 2);
    }
    
    public function getFormattedWeight(){
        return number_format($this->getWeight()/10, 2);
    }
}