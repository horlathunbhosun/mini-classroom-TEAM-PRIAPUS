<?php


class Model_insertValues extends CI_Model {

    function addItem($array, $table) {
        //echo 'ins';
        $query = $this->db->insert($table, $array);
        if ($query) {
            return true;
        } 
    }


    

}

?>