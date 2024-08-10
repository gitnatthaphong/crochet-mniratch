<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    private $message_user_tbl = 'message_user';
    private $visits_tbl = 'visits';
    
    public function getCountNewMessage()
    {
        $this->db->where('MONTH(create_date)', date('m'));
        $count = $this->db->count_all_results($this->message_user_tbl);
        return $count;
    }

    public function getCountAllMessage()
    {
        $count = $this->db->count_all_results($this->message_user_tbl);
        return $count;
    }

    public function getCountVisitWebSite()
    {
        $this->db->select('SUM(count) as sum');
        $this->db->where('page_url', base_url());
        $data = $this->db->get($this->visits_tbl)->row_array();

        return !empty($data)? $data['sum'] : 0;
    }

    public function getVisitWebSiteGraph()
    {
        $getData = [];
        for ($i=1; $i <= 12 ; $i++) { 
            $this->db->select('SUM(count) as sum');
            $this->db->where('MONTH(create_date)', $i);
            $data = $this->db->get($this->visits_tbl)->row_array();

            $getData[] = !empty($data) ? $data['sum'] : 0; 
        }
        
        return $getData;
    }
}
