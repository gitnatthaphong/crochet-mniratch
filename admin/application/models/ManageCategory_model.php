<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageCategory_model extends CI_Model
{
    private $topics_tbl = 'topics';

    public function getData()
    {
        $this->db->order_by('create_date', 'desc');
        $data = $this->db->get($this->topics_tbl)->result_array();

        $getData = [];
        if(!empty($data)) {
            $getData = $data;
        }

        return $getData;
    }

    public function getDetail($id)
    {
        $this->db->where('topic_id', $id);
        $data = $this->db->get($this->topics_tbl)->row_array();

        if(!empty($data)) {
            return $data;
        }

        return [];
    }

    public function insertData()
    {
        $post = $this->input->post();

        $dataInsert = [
            'topic_name' => $post['topic_name'],
            'topic_detail' => $post['topic_detail'],
            'topic_icon' => $post['topic_icon'],
            'status' => $post['status'],
        ];

        $this->db->insert($this->topics_tbl, $dataInsert);
    }

    public function updateData($id)
    {
        $post = $this->input->post();

        $dataUpdate = [
            'topic_name' => $post['topic_name'],
            'topic_detail' => $post['topic_detail'],
            'topic_icon' => $post['topic_icon'],
            'status' => $post['status'],
        ];

        $this->db->where('topic_id', $id);
        $this->db->update($this->topics_tbl, $dataUpdate);
    }

    public function delete($id)
    {
        $this->db->where('topic_id', $id);
        $this->db->delete($this->topics_tbl);
    }

}
