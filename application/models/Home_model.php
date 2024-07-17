<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    private $visits_tbl = 'visits';

    public function __construct()
    {
        $this->fnc_createTable();
    }

    private function fnc_createTable()
    {
        if (!$this->db->table_exists($this->visits_tbl) )
        {
            $sql = "CREATE TABLE visits (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    page_url TEXT NOT NULL,
                    count INT(10) NOT NULL
            );";

            $this->db->query($sql);

            $dataInsert = [
                'page_url' => base_url(),
                'count' => 0
            ];

            $this->db->insert($this->visits_tbl, $dataInsert);
        }
    }

    public function getCountSite()
    {
        $this->db->where('id', 1);
        $data = $this->db->get($this->visits_tbl)->row_array();
        
        if(!empty($data)) {
            return $data['count'];
        } else {
            return [];
        }
    }

    public function updateCountSite()
    {
        $this->db->query("UPDATE {$this->visits_tbl} SET count = count + 1 WHERE id = 1");
    }
}
