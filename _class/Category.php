<?php
class Category extends Content {
    
    protected $_id = 'id';
    protected $_tableName = 'categories';
    
    public function getAllActive(){
        $sql = "SELECT * FROM " . $this->_tableName . " WHERE active > 0";
        $res = $this->_db->query($sql);
        $return = array();
        while ($row = mysql_fetch_array($res)){
            $return[] = $row;
        }
        return $return;
    }

    public function getAllActiveForMenu(){
        $sql = "SELECT * FROM " . $this->_tableName . " WHERE active > 0 WHERE parent_category = 0";
        $res = $this->_db->query($sql);
        $return = array();
        while ($row = mysql_fetch_array($res)){
            $return[$row['id']]['parent'] = $row;
            $sql = "SELECT * FROM " . $this->_tableName . " WHERE active > 0 WHERE parent_category = " . $row['id'];
            $res = $this->_db->query($sql);
            while ($child = mysql_fetch_array($res)){
                $return[$row['id']]['children'][] = $child;
            }
        }
        return $return;
    }
}