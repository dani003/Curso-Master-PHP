<?php
class connect{
    public statis function connect(){
        $db = new mysqli('localhost', 'root', '', 'tienda_master');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
 ?>
