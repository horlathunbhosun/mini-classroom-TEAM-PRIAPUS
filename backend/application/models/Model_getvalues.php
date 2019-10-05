<?php


class Model_getvalues extends CI_Model {

    function getDetails1($table, $where, $id) {
        $this->db->select('*');
        $this->db->where($where, $id);
        $this->db->from($table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

      function getDetails($table, $where, $id) {
        $this->db->select('*');
        $this->db->where($where, $id);
        $this->db->from($table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    function getDetails2($table, $array) {
        $this->db->select('*');
        foreach ($array as $key => $val) {
            $this->db->where($key, $val);
        }
        $this->db->from($table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    function getCount($table, $where, $whereVal) {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    function getCount2($table, $array) {
        $this->db->select('*');
        foreach ($array as $key => $val) {
            $this->db->where($key, $val);
        }
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    function getTableRows($table, $where, $whereVal, $orderby, $orderVal = "desc", $limit = 0, $limit2 = "") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        if ($limit != 0) {
            $this->db->limit($limit, $limit2);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function getTableRowsCols($table, $array, $orderby, $orderVal = "desc", $limit = 0) {
        $this->db->select('*');
        foreach ($array as $key => $val) {
            $this->db->where($key, $val);
        }
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        if ($limit != 0) {
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getTableRows2($table, $where, $whereVal, $where2, $whereVal2, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->where($where2, $whereVal2);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        $query = $this->db->get();
        return $query->result();
    }

    function getTableRows3($table, $where, $whereVal, $where2, $whereVal2, $where3, $whereVal3, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->where($where2, $whereVal2);
        $this->db->where($where3, $whereVal3);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        $query = $this->db->get();
        return $query->result();
    }

    function getTableRows4($table, $where, $whereVal, $where2, $whereVal2, $where3, $whereVal3, $where4, $whereVal4, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->where($where2, $whereVal2);
        $this->db->where($where3, $whereVal3);
        $this->db->where($where4, $whereVal4);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        $query = $this->db->get();
        return $query->result();
    }

    function searchVal($table, $where, $whereVal, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        //$this->db->where();
        $this->db->like($where, $whereVal);
        $this->db->order_by($orderby, $orderVal);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
    
    function getSum($table, $col, $whereVal, $where, $whereVal2="", $where2="") {
        $this->db->select_sum($col);
        $this->db->where($whereVal, $where);
        if($where2 != "")
            $this->db->where($whereVal2, $where2);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->row_array();
    }

    function getAll($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    function getColumnByArray($table, $col, $whereField, $whereValue) {
        $this->db->select($col);
        $this->db->from($table);
        $this->db->where_in($whereField, $whereValue);
        $query = $this->db->get();
        return $query->result();
    }

}

?>