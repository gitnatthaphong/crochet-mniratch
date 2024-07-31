<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageWebSite_model extends CI_Model
{

    private $sys_config_tbl = 'sys_config';
    private $path = 'file_upload/website/';


    public function getData()
    {
        $getData = [];

        $data = $this->db->get($this->sys_config_tbl)->result_array();
        if(!empty($data)) {
            foreach($data as $key => $value) {
                $getData[$value['field_name']] = $value['field_value'];
            }
        }

        return $getData;
    }

    public function save()
    {
        $post = $this->input->post();

        if(!empty($post)) {
            foreach($post as $key => $value) {
                $this->db->where('field_name', $key);
                $this->db->update($this->sys_config_tbl, ['field_value' => $value]);
            }
        }

        if(!empty($_FILES)) {
            foreach($_FILES as $key => $value) {
                $this->db->where('field_name', $key);
                $data = $this->db->get($this->sys_config_tbl)->row_array();
                
                if(!empty($data) && !empty($data['field_value'])) {
                    if(file_exists($data['field_value'])) {
                        @unlink($data['field_value']);
                    }
                }

                $file = $this->fnc_updateFile($value);

                $this->db->where('field_name', $key);
                $this->db->update($this->sys_config_tbl, ['field_value' => $file]);
            }
        }
    }

    private function fnc_updateFile($value)
    {
        if(!is_dir($this->path)) {
            @mkdir($this->path);
        }

        $ext = explode('.',$value['name']);
        $filename = md5($value['name'] . rand(1, 100) . date('Ymdhis')) . '.' . end($ext);

        move_uploaded_file($value['tmp_name'], $this->path . $filename);

        return $this->path . $filename;        
    }
}
