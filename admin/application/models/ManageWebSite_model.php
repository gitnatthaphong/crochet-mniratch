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
        if (!empty($data)) {
            $fieldFiles = ['bg_count', 'banner_image'];
            foreach ($data as $key => $value) {
                $getData[$value['field_name']] = $value['field_value'];

                if (in_array($value['field_name'], $fieldFiles) && !empty($value['field_value'])) {
                    $getData[$value['field_name']] = (file_exists($value['field_value'])) ? base_url() . 'admin/' . $value['field_value'] : null;
                }
            }
        }

        return $getData;
    }

    public function save()
    {
        $post = $this->input->post();

        if (!empty($post)) {
            foreach ($post as $key => $value) {
                $this->db->where('field_name', $key);
                $this->db->update($this->sys_config_tbl, ['field_value' => $value]);
            }
        }

        if (!empty($_FILES)) {
            foreach ($_FILES as $key => $value) {
                if ($value['size'] > 0 && !empty($value['name'])) {

                    $this->db->where('field_name', $key);
                    $data = $this->db->get($this->sys_config_tbl)->row_array();

                    if (!empty($data) && !empty($data['field_value'])) {
                        if (file_exists($data['field_value'])) {
                            @unlink($data['field_value']);
                        }
                    }

                    $file = $this->fnc_updateFile($value);

                    $this->db->where('field_name', $key);
                    $this->db->update($this->sys_config_tbl, ['field_value' => $file]);
                }
            }
        }
    }

    private function fnc_updateFile($value)
    {
        if (!is_dir($this->path)) {
            @mkdir($this->path);
        }

        $ext = explode('.', $value['name']);
        $filename = md5($value['name'] . rand(1, 100) . date('Ymdhis')) . '.' . end($ext);

        move_uploaded_file($value['tmp_name'], $this->path . $filename);

        return $this->path . $filename;
    }

    public function reset($type)
    {
        $dataUpdate = [];

        if ($type == 1) {
            $dataUpdate[] = [
                'field_name' => 'banner_title',
                'field_value' => '<h2>งานถักไหมพรมคอตตอนซอฟท์ที่ดีที่สุดในการทำ<br>ตุ๊กตาและของตกแต่ง</h2>'
            ];
            $dataUpdate[] = [
                'field_name' => 'banner_detail',
                'field_value' => 'ค้นหาของขวัญสุดพิเศษได้ที่นี่ ไม่ว่าจะเนื่องในโอกาสสำคัญไหนๆ เราขอเป็นของขวัญอันล้ำค่าสำหรับคนพิเศษของคุณ'
            ];

            $dataUpdate[] = [
                'field_name' => 'banner_image',
                'field_value' => null
            ];
        }

        if ($type == 2) {
            $dataUpdate[] = [
                'field_name' => 'total_shop',
                'field_value' => 0
            ];

            $dataUpdate[] = [
                'field_name' => 'bg_count',
                'field_value' => null
            ];
        }

        if ($type == 3) {
            $dataUpdate[] = [
                'field_name' => 'contact_title',
                'field_value' => 'ติดตามข่าวสาร'
            ];
            $dataUpdate[] = [
                'field_name' => 'contact_detail',
                'field_value' => 'หากคุณต้องการติดตามข่าวสารหรือสอบถามการสั่งซื้อสินค้าได้ช่องทาง FaceBook และ Instragram ของเรา'
            ];
        }

        if ($type == 4) {
            $dataUpdate[] = [
                'field_name' => 'social_facebook',
                'field_value' => 'https://www.facebook.com/niratshoppingg/'
            ];
            $dataUpdate[] = [
                'field_name' => 'social_instagram',
                'field_value' => 'https://www.instagram.com/crochet_by_mniratch/'
            ];
            $dataUpdate[] = [
                'field_name' => 'social_email',
                'field_value' => null
            ];
        }

        $fieldFiles = ['bg_count', 'banner_image'];

        foreach ($dataUpdate as $key => $value) {

            if (in_array($value['field_name'], $fieldFiles) &&  !empty($value['field_value']) && file_exists($value['field_value'])) {
                unset($value['field_value']);
            }

            $this->db->where('field_name', $value['field_name']);
            $this->db->update($this->sys_config_tbl, ['field_value' => $value['field_value']]);
        }

        $this->db->close();
    }
}
