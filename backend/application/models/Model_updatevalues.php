<?php

	class Model_updateValues extends CI_Model{
		
	
		
	
        function updateVal($table, $array, $where, $id)
        {
            if($this->db->update($table, $array, " $where = '$id'"))
            {
		return true;
            }else{
		return false;
            }
        }
        
        function updateVal2($id, $array, $table, $where) {
        if ($this->db->update($table, $array, "" . $where . " = " . $id . "")) {
            return true;
        } else {
            return false;
        }
    }
    
    function updateVal3($table, $array, $where, $id, $where2, $id2) {
        if ($this->db->update($table, $array, "" . $where . " = " . $id . " and " . $where2 . " = " . $id2 . "")) {
            return true;
        } else {
            return false;
        }
    }		
		
	}
	
?>