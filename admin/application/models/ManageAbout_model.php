<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageAbout_model extends CI_Model
{
    private $about_content_tbl = 'about_content';

    public function getData()
    {
        $this->db->order_by('about_id', 'desc');
        $data = $this->db->get($this->about_content_tbl)->result_array();
        
        if(!empty($data)) {
            return $data;
        } else {
            return [];
        }
    }

    public function getDetail($id)
    {
        $this->db->where('about_id', $id);
        $data = $this->db->get($this->about_content_tbl)->row_array();
        
        if(!empty($data)) {
            return $data;
        } else {
            return [];
        }
    }

    public function updateData($id)
    {
        $post = $this->input->post();

        $dataUpdate = [
            'title' => $post['title'],
            'detail' => $post['detail'],
            'icon' => $post['icon'],
        ];

        $this->db->where('about_id', $id);
        $this->db->update($this->about_content_tbl, $dataUpdate);
    }
}
