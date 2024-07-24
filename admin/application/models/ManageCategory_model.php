<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageCategory_model extends CI_Model
{
    private $product_tbl = 'category';
    private $per_page = 10;

    public function updateData()
    {
        _print_r($_POST);
    }



   

    public function getData($page = 1)
    {
        $offset = $this->fnc_calPageOffset($page);

        $this->db->offset($offset);
        $this->db->limit($this->per_page);
        $data = $this->db->get($this->product_tbl)->row_array();
        //_print_r($data);
        
        

        $getData = [];
        if(!empty($data)) {
            $getData = $data;
        }
        //_print_r($getData);

        return $getData;
    }

    private function fnc_calPageOffset($page)
    {
        return ($page - 1) * $this->per_page;
    }
}
