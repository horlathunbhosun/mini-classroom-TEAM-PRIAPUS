<?php
	
	class Model_deleteValues extends CI_Model{
		
	
        function delitem($data, $table)
        {
            $this->db->delete($table, $data);
        }
		 public function deletestuff($table,$where,$whereval){
        return  $this->db->delete($table,[$where=>$whereval]);
		}
	}
	
