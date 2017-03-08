<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MHome extends CI_Model{
    function getImages()
    {
        $query = $this->db->get('images');
        if($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
}