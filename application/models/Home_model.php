<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    private $visits_tbl = 'visits';
    private $sys_config_tbl = 'sys_config';
    private $message_user_tbl = 'message_user';
    private $pathAdmin = 'admin/';

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

    public function getDataSys()
    {
        $data = $this->db->get($this->sys_config_tbl)->result_array();

        $getData = [];
        if(!empty($data)) {

            $fileImage = ['banner_image', 'bg_count'];
            foreach($data as $key => $value) {
                $getData[$value['field_name']] = $value['field_value'];

                // data is files
                if(in_array($value['field_name'], $fileImage)) {
                    if(file_exists($this->pathAdmin . $value['field_value'])) {
                        $getData[$value['field_name']] = base_url() . 'admin/' . $value['field_value'];
                    } else {
                        $getData[$value['field_name']] = null;
                    }
                }
            }
        }

        return $getData;
    }

    public function sendMessage()
    {
        $post = $this->input->post();
        
        
        if(!empty($post['name']) && !empty($post['email']) && !empty($post['message'])) {
            $post['name'] = trim($post['name']);
            $post['email'] = trim($post['email']);
            $post['message'] = trim($post['message']);
            
            $this->db->insert($this->message_user_tbl, $post);
        }
    }
}
