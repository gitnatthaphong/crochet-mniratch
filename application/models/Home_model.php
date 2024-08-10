<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    private $visits_tbl = 'visits';
    private $sys_config_tbl = 'sys_config';
    private $message_user_tbl = 'message_user';
    private $product_tbl = 'product';
    private $about_content_tbl = 'about_content';
    private $topics_tbl = 'topics';

    private $pathAdmin = 'admin/';

    public function getCountSite()
    {
        $this->db->where('id', 1);
        $data = $this->db->get($this->visits_tbl)->row_array();

        if (!empty($data)) {
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
        if (!empty($data)) {

            $fileImage = ['banner_image', 'bg_count'];
            foreach ($data as $key => $value) {
                $getData[$value['field_name']] = $value['field_value'];

                // data is files
                if (in_array($value['field_name'], $fileImage) && !empty($value['field_value'])) {
                    if (file_exists($this->pathAdmin . $value['field_value'])) {
                        $getData[$value['field_name']] = base_url() . 'admin/' . $value['field_value'];
                    } else {
                        $getData[$value['field_name']] = null;
                    }
                }
            }
        }

        return $getData;
    }

    public function getDataProduct()
    {
        $this->db->where('status', 1);
        $this->db->limit(9);
        $this->db->order_by('rand()');
        $data = $this->db->get($this->product_tbl)->result_array();

        $getData = [];
        if (!empty($data)) {
            foreach($data as $key => $value) {
                if(!empty($value['product_tags'])) {
                    $value['product_tags'] = explode(',', $value['product_tags']);
                }

                if(!empty($value['image_path'])) {
                    if (file_exists($this->pathAdmin . $value['image_path'])) {
                        $value['image_path'] = base_url() . 'admin/' . $value['image_path'];
                    } else {
                        unset($data[$key]);
                    }
                }

                $getData[] = $value;
            }
        }
        
        return $getData;
    }

    public function sendMessage()
    {
        $post = $this->input->post();


        if (!empty($post['name']) && !empty($post['email']) && !empty($post['message'])) {
            $post['name'] = trim($post['name']);
            $post['email'] = trim($post['email']);
            $post['message'] = trim($post['message']);

            $this->db->insert($this->message_user_tbl, $post);
        }
    }

    public function getDataAbout()
    {
        $this->db->order_by('about_id', 'asc');
        $this->db->limit(3);
        $data = $this->db->get($this->about_content_tbl)->result_array();
        if(!empty($data)) {
            return $data;
        } else {
            return [];
        }
    }

    public function getDataCategory()
    {
        $this->db->order_by('create_date', 'desc');
        $this->db->limit(5);
        $data = $this->db->get($this->topics_tbl)->result_array();
        if(!empty($data)) {
            return $data;
        } else {
            return [];
        }
    }
}
