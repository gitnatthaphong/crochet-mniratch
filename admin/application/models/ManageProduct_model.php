<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageProduct_model extends CI_Model
{
    private $product_tbl = 'product';
    private $path = 'file_upload/product/';
    private $per_page = 10;

    public function updateData($id)
    {
        $post = $this->input->post();
        $file = !empty($_FILES['product_image']) ? $_FILES['product_image'] : [];

        $dataUpdate = [
            'product_name' => $post['product_name'],
            'product_tags' => $post['product_tags'],
            'image_original_name' => $file['name'],
            'status' => $post['status'],
        ];

        if(!empty($file) && !empty($file['name'])) {
            @unlink($post['old_product_image']);
            unset($post['old_product_image']);

            $explodeFile = explode('.',$file['full_path']);
            $ext = end($explodeFile);
            $newFilename = md5($file['name'] . date('Y-m-d h:i:s')).rand(1,100) . '.' . $ext;
            
            move_uploaded_file($file['tmp_name'], $this->path . $newFilename);

            $dataUpdate['image_path'] = $this->path . $newFilename;
            $dataUpdate['image_name'] = $newFilename;
        }

        $this->db->where('product_id', $id);
        $this->db->update($this->product_tbl, $dataUpdate);
    }

    public function insertData()
    {
        $post = $this->input->post();
        $file = !empty($_FILES['product_image']) ? $_FILES['product_image'] : [];

        $explodeFile = explode('.',$file['full_path']);
        $ext = end($explodeFile);
        $newFilename = md5($file['name'] . date('Y-m-d h:i:s')).rand(1,100) . '.' . $ext;
        
        move_uploaded_file($file['tmp_name'], $this->path . $newFilename);

        $dataInsert = [
            'product_name' => $post['product_name'],
            'product_tags' => $post['product_tags'],
            'image_path' => $this->path . $newFilename,
            'image_original_name' => $file['name'],
            'image_name' => $newFilename,
            'status' => $post['status'],
        ];

        $this->db->insert($this->product_tbl, $dataInsert);
    }

    public function getData($page = 1)
    {
        $offset = $this->fnc_calPageOffset($page);

        $this->db->offset($offset);
        $this->db->limit($this->per_page);
        $this->db->order_by('create_date', 'desc');
        $data = $this->db->get($this->product_tbl)->result_array();

        $getData = [];
        if(!empty($data)) {
            $getData = $data;
        }

        return $getData;
    }

    private function fnc_calPageOffset($page)
    {
        return ($page - 1) * $this->per_page;
    }

    public function getDetail($id)
    {
        $this->db->where('product_id', $id);
        $data = $this->db->get($this->product_tbl)->row_array();
        
        $getData = [];
        if(!empty($data)) {
            $data['image_path'] = (file_exists($data['image_path'])) ? base_url() . 'admin/' . $data['image_path'] : null;
            $getData = $data;
        }

        return $getData;
    }

    public function delete($id)
    {
        $this->db->where('product_id', $id);
        $data = $this->db->get($this->product_tbl)->row_array();

        if(!empty($data)) {
            @unlink($data['image_path']);
        }

        $this->db->where('product_id', $id);
        $this->db->delete($this->product_tbl);
    }
}
